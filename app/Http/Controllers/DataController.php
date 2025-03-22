<?php

namespace App\Http\Controllers;

use App\Jobs\DataJob;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function __invoke()
    {

       


      

        DB::transaction(function () {

            //создание абстрактного юзера
            $user = User::factory()->create();
            /**........................... */
            $user->orders()->create();

            $user->load('orders');

            dispatch(new DataJob(
                foo: 'bar',
                user: $user,
            ));

            // throw new Exception();
        });


        return now();
    }
}
