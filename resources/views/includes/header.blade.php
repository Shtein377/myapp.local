<div class="search-bar  py-2">
    <div class="container-fluid d-flex justify-content-end">
        <form class="d-flex me-lg-5" role="search" style="max-width: 400px;">
            <input class="form-control custom_form  me-2" type="search" placeholder="Поиск" aria-label="Search"/>
            <button class="btn search_button" type="submit">{{__('Поиск')}}</button>
        </form>
    </div>
</div>



<nav class="navbar navbar-expand-lg shadow-sm">

    
    <div class="container">


        <!-- Логотип -->
        <a class="navbar-brand" href="#">
            {{config('app.name')}}
        </a>
        
        <!-- Кнопка мобильного меню -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Основное меню -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Первый пункт меню с выпадающим списком -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="newbornDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-baby me-1"></i> Новорожденные
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="newbornDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-baby-carriage"></i> Здоровье и уход</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-utensils"></i>Питание и грудное вскармливание</a></li>
                    
                       
                        <li><a class="dropdown-item" href="#"><i class="fas fa-bed"></i> Сон</a></li>
                        
                    </ul>
                </li>
                
                <!-- Второй пункт меню с выпадающим списком -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="babiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-baby-carriage me-1"></i> Малыши
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="babiesDropdown">
                        <li><a class="dropdown-item" href="#">Развитие малышей</a></li>
                        <li><a class="dropdown-item" href="#">Поведение малышей</a></li>
                        <li><a class="dropdown-item" href="#">Здоровье и ежедневный уход</a></li>
                        <li><a class="dropdown-item" href="#">Безопасность</a></li>
                        <li><a class="dropdown-item" href="#">Питание</a></li>
                    </ul>
                </li>
                
                <!-- Третий пункт меню с выпадающим списком -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="preschoolersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-child me-1"></i> Дошкольники
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="preschoolersDropdown">
                        <li><a class="dropdown-item" href="#">Развитие дошкольников</a></li>
                        <li><a class="dropdown-item" href="#">Поведение дошкольников</a></li>
                        <li><a class="dropdown-item" href="#">Здоровье и фитнес</a></li>
                        <li><a class="dropdown-item" href="#">Безопасность</a></li>
                        <li><a class="dropdown-item" href="#">Питание</a></li>
                    </ul>
                </li>
                
                <!-- Четвертый пункт меню с выпадающим списком -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="schoolKidsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-graduate me-1"></i> Школьники
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="schoolKidsDropdown">
                        <li><a class="dropdown-item" href="#">Развитие школьников</a></li>
                        <li><a class="dropdown-item" href="#">Поведение школьников</a></li>
                        <li><a class="dropdown-item" href="#">Здоровье и фитнес</a></li>
                        <li><a class="dropdown-item" href="#">Безопасность</a></li>
                        <li><a class="dropdown-item" href="#">Питание</a></li>
                    </ul>
                </li>
                
                <!-- Пятый пункт меню с выпадающим списком -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="teensDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users me-1"></i> Подростки
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="teensDropdown">
                        <li><a class="dropdown-item" href="#">Развитие подростков</a></li>
                        <li><a class="dropdown-item" href="#">Поведение подростков</a></li>
                        <li><a class="dropdown-item" href="#">Здоровье и фитнес</a></li>
                        <li><a class="dropdown-item" href="#">Безопасность</a></li>
                        <li><a class="dropdown-item" href="#">Питание</a></li>
                    </ul>
                </li>
            </ul>
            
            <!-- Кнопки входа и регистрации -->
            <div class="auth-buttons d-flex ms-3">
                <a href="#" class="btn btn-login btn-sm">
                    <i class="fas fa-sign-in-alt me-1"></i> Вход
                </a>
                <a href="#" class="btn btn-register btn-sm ms-2">
                    <i class="fas fa-user-plus me-1"></i> Регистрация
                </a>
            </div>
        </div>
    </div>
</nav>

