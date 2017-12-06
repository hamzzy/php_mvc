
<?php
Route::set('index', function () {
    Index::CreateView('Index');
    



});

Route::set('about-us',function(){
     AboutUs::CreateView('AboutUs');
    


 
});


Route::set('contact-us', function () {
    ContactUs::CreateView('ContactUs');


});



?>