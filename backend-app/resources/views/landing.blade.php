@extends('layouts.app')

<div class="land-background">
    <div class="land-header">
        <h1>SPACE MASTERS</h1><br>
        <h2>Создайте свой космос!</h2>        
    </div>
</div>
<div class="land-intro">
    <h3>Вы мечтали об идеальном доме - исполняем!</h3>
    <hr>    
    <h5>Компания Space masters создает звездные системы на любой вкус.<br>
        Выберите звезду, планеты, оформите гелиосферу - и предоставьте дело нам!</h5>
</div>
<div class="land-system">
    <div class="row">
        <div class="col col-md-4 offset-md-4">
            <div class="m-3">                
                <div class="my-3">
                    <div class="land-giant"></div>
                </div> 
                <h5>Газовые гиганты</h5>
                Стражи внешних границ системы, источник топлива, обладатели множества ступников.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 offset-md-5">
            <div class="m-3">
                <div class="my-3">
                    <div class="land-sun"></div>
                </div>            
                <h5>Солнце</h5>
                Горячее? Холодное? А может, двойное?
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-6">
            <div class="m-3">
                <div class="my-3">
                    <div class="land-planet"></div>
                </div>
                <h5>Планеты земной группы</h5>
                Идеальная среда для разведения углеродных форм жизни.<br>
                Играйте с составом и экспериментируйте!                
            </div>            
        </div>
    </div>
</div>
<div class="land-intro">
    <h3>Нам подвластна любая материя!</h3>
    <hr>    
    <h5>Высокотемпературные урановые ядра и карликовые планеты на абсолютном нуле - воплотите самые смелые фантазии.</h5>
</div>
<div class="land-expl">
    <div class="row align-items-center mx-5">
        <div class="col">            
            <div class="land-quality-item">        
                <h3>Вселенская надежность</h3><br>
                <h5>При разработке мы используем самые верные инструменты: квантовую физику, гравитационные постоянные, ковалентная связь.
                    Выработанные нами константы используются по всей вселенной.</h5>
            </div>            
        </div>
        <div class="col">            
            <div class="land-quality-item">
                <h3>Космическая скорость</h3><br>
                <h5>Работа над каждым заказом ведется на сверхсветовых скоростях. 
                    Мы пользуемся только быстрейшими взаимодействиями и гарантируем результат в обозначенный срок.</h5>
            </div>            
        </div>
        <div class="col">            
            <div class="land-quality-item">
                <h3>Астрономическая точность</h3><br>
                <h5>Все связи просчитаны, все атомы на своем месте.
                    Наши прогнозы вычисляются на миллиарды лет вперед, внимание уделяется каждой молекуле.
                    Неожиданности - только по заказу!</h5>
            </div>
        </div>        
    </div>
</div>
<div class="land-intro">
    <h3>Отзывы клиентов</h3>
</div>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
            <div class="col-md-6 offset-md-3 text-center">
                <h4>Шуб-Ниггурат</h4>
                <p>«Мечтал о тихом уголке, где я смогу выращивать эко-еду. 
                    Теперь у меня есть целая планета ми-го! 
                    Специалисты так настроили ионное поле планеты, что солнечный ветер плодит мутации разных вкусов. 
                    И ни одного метеорита - спасибо пяти газовым гигантам»</p>
            </div>
      </div>
      <div class="carousel-item">
            <div class="col-md-6 offset-md-3 text-center">
                <h4>Император</h4>
                <p>«Пробовал делать звездную систему сам - вышло так себе. 
                    Обратился в Space masters за новой, и так понравилось... 
                    Короче, дозаказываю уже шестой Сегментум Майорис. 
                    Рекомендую добавлять раз в несколько систем варп-сектор. 
                    Выходит нестабильно, но весело»</p>
            </div>
      </div>
      <div class="carousel-item">
            <div class="col-md-6 offset-md-3 text-center">
                <h4>Аман’Тул</h4>
                <p>«Обращался в разные компании, но их поделки то и дело ломаются. 
                    Владыки Бездны - вообще тихий ужас! После них все с нуля чинил. 
                    Рук не хватает, обратился сюда. 
                    Починили все за одну эпоху. 
                    Счастлив, закупил постоянное техобслуживание»</p>
            </div>
      </div>
      <div class="carousel-item">
            <div class="col-md-6 offset-md-3 text-center">
                <h4>Иегова</h4>
                <p><h2><b>הי אור</b></h2></p>
            </div>
      </div>
      <div class="carousel-item">
            <div class="col-md-6 offset-md-3 text-center">
                <h4>Рептилоидное правительство (анонимный заказчик)</h4>
                <p>«Получили солнечную систему в ужасном состоянии. 
                    Куча строительного мусора по всей системе, солнце тухнет, убитая третья планета. 
                    Space masters справились просто замечательно! 
                    Отправили клингинг на третью планету, дозаправили светило, убрали космический мусор и продули космическую пыль - виды теперь просто шикарные»</p>
            </div>
      </div>      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
<div class="land-intro">    
    <h3>Есть вопросы?</h3>
    Свяжитесь с нашим консультантом: +т-(еле)-фон, <a href="mailto:test">test@test.cosmos</a>
</div>