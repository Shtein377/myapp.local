<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;


class DataJob implements ShouldQueue
{
    use Queueable;

    private int $userId;

    // public $deleteWhenMissingModels = true;

    public function __construct(
        private string $foo,

        private User $user,
    )
    {
      $this->user = $user->withoutRelations(); 

      $this->userId = $user->id;
    }

  
    public function handle(): void
    {
     info('data',['foo'=>$this->foo,'user'=>$this->user]);
    }
}
