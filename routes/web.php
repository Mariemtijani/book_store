<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view ('home');
});

Route::get("/cat{id}", function($id){

    $tab = array();

    if ($id == 1) {
        $tab = array (
            array (
                'name' => 'Tonya and her perfect tea',
                'author' => 'Alina Slyshik',
                'image'=> 'children1.jpg',
                'price' => 50
            ),
             array (
                'name' => 'Frosty and snow man',
                'author' => 'Diane Muldrow',
                'image'=> 'children2.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'Enchanted Forest',
                'author' => 'Diane Muldrow',
                'image'=> 'children3.jpg',
                'price' => 50
            ) , array (
                'name' => 'Unseen world',
                'author' => 'Elizabith Francis',
                'image'=> 'children4.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'Catching happiness',
                'author' => 'Ken Adams',
                'image'=> 'children5.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'The bih cheese',
                'author' => 'Jory jhon',
                'image'=> 'children6.jpg',
                'price' => 50
            ) 
        );
    }

    elseif ($id == 2) {

         $tab = array (
            array (
                    'name' => 'مجمل تاريخ المغرب',
                    'author' => 'عبد الله العروي',
                    'image'=> 'history1.jpg', 
                    'price' => 50
                ) ,
                array (
                    'name' => 'Sapiens',
                    'author' => 'Yuval Noah',
                    'image'=> 'history2.jpg',
                    'price' => 50
                ) 
        );
        
    }

    elseif ($id == 3 ){
        $tab = array (
            array (
                'name' => 'Journey to the stars',
                'author' => 'Clyde Stewrd',
                'image' => 'fiction1.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Growth of creativity',
                'author' => 'Clyde Stewrd',
                'image' => 'fiction2.jpg',
                'price' => 50
            ),
            array (
                'name' => 'The forcast killer',
                'author' => 'Clyde Stewrd',
                'image' => 'fiction3.jpg',
                'price' => 50
            ),
            array (
                'name' => 'The opposite house',
                'author' => 'Helen Oyeyemi',
                'image' => 'fiction4.jpg',
                'price' => 50
            ),
            array (
                'name' => 'City dreams',
                'author' => 'Merry Warren',
                'image' => 'fiction5.jpg',
                'price' => 50
            )
            );

    }
    elseif ($id == 4 ){
        $tab = array (
            array (
                'name' => 'Your Second Life Begins',
                'author' => 'Raphaëlle Giordano',
                'image' => 'novel1.jpg',
                'price' => 50
            ),
            array (
                'name' => 'The Forty Rules of Love',
                'author' => 'Elif Shafak',
                'image' => 'novel2.jpg',
                'price' => 50
            ),
            array (
                'name' => 'الموريسكي',
                'author' => 'حسن أوريد',
                'image' => 'novel3.jpg',
                'price' => 50
            ),
            array (
                'name' => 'رسائل سقطت من ساعي البريد',
                'author' => 'يوسف الدموكي',
                'image' => 'novel4.jpg',
                'price' => 50
            ),
            array (
                'name' => 'ثلاثية غرناطة',
                'author' => 'رضوى عاشور',
                'image' => 'novel5.jpg',
                'price' => 50
            ),
            array (
                'name' => 'أرض البرتقال الحزين',
                'author' => 'غسان كنفاني',
                'image' => 'novel6.jpg',
                'price' => 50
            ),
            array (
                'name' => 'رواء مكة',
                'author' => 'حسن أوريد',
                'image' => 'novel7.jpg',
                'price' => 50
            ), array (
                'name' => 'كريسماس في مكة',
                'author' => 'أحمد خيري العمري',
                'image' => 'novel8.jpg',
                'price' => 50
            ),
            array (
                'name' => 'ثاني أكسيد الحب',
                'author' => 'منى سلامة',
                'image' => 'novel9.jpg',
                'price' => 50
            )
            );
    }
    elseif ($id == 5 ){
        $tab = array (
            array (
                'name' => 'Surrounded by Psychopaths',
                'author' => 'Thomas Erikson',
                'image' => 'self1.jpg',
                'price' => 50
            ),
            array (
                'name' => 'عقدك النفسية سجنك الأبدي',
                'author' => 'يوسف الحسني',
                'image' => 'self2.jpg',
                'price' => 50
            ),
            array (
                'name' => 'أبي الذي أكره',
                'author' => 'عماد رشاد عثمان',
                'image' => 'self3.jpg',
                'price' => 50
            ),
            array (
                'name' => 'علاقات خطرة',
                'author' => 'محمد طه',
                'image' => 'self4.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Atomic Habits',
                'author' => 'James Clear',
                'image' => 'self5.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Zero to One',
                'author' => 'Peter Thiel',
                'image' => 'self6.jpg',
                'price' => 50
            ),
            array (
                'name' => 'فاتتني صلاة',
                'author' => 'إسلام جمال',
                'image' => 'self7.jpg',
                'price' => 50
            ), array (
                'name' => 'كوني صحابية',
                'author' => 'حنان لاشين',
                'image' => 'self8.jpg',
                'price' => 50
            ), array (
                'name' => '40 أربعون',
                'author' => 'أحمد الشقيري',
                'image' => 'self9.jpg',
                'price' => 50
            )
            );
        }

    else {
        $tab = array (
            array (
                'name' => 'Tonya and her perfect tea',
                'author' => 'Alina Slyshik',
                'image'=> 'children1.jpg',
                'price' => 50
            ),
             array (
                'name' => 'Frosty and snow man',
                'author' => 'Diane Muldrow',
                'image'=> 'children2.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'Enchanted Forest',
                'author' => 'Diane Muldrow',
                'image'=> 'children3.jpg',
                'price' => 50
            ) , array (
                'name' => 'Unseen world',
                'author' => 'Elizabith Francis',
                'image'=> 'children4.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'Catching happiness',
                'author' => 'Ken Adams',
                'image'=> 'children5.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'The bih cheese',
                'author' => 'Jory jhon',
                'image'=> 'children6.jpg',
                'price' => 50
            ) ,
            array (
                'name' => 'Surrounded by Psychopaths',
                'author' => 'Thomas Erikson',
                'image' => 'self1.jpg',
                'price' => 50
            ),
            array (
                'name' => 'عقدك النفسية سجنك الأبدي',
                'author' => 'يوسف الحسني',
                'image' => 'self2.jpg',
                'price' => 50
            ),
            array (
                'name' => 'أبي الذي أكره',
                'author' => 'عماد رشاد عثمان',
                'image' => 'self3.jpg',
                'price' => 50
            ),
            array (
                'name' => 'علاقات خطرة',
                'author' => 'محمد طه',
                'image' => 'self4.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Atomic Habits',
                'author' => 'James Clear',
                'image' => 'self5.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Zero to One',
                'author' => 'Peter Thiel',
                'image' => 'self6.jpg',
                'price' => 50
            ),
            array (
                'name' => 'فاتتني صلاة',
                'author' => 'إسلام جمال',
                'image' => 'self7.jpg',
                'price' => 50
            ), array (
                'name' => 'كوني صحابية',
                'author' => 'حنان لاشين',
                'image' => 'self8.jpg',
                'price' => 50
            ), array (
                'name' => '40 أربعون',
                'author' => 'أحمد الشقيري',
                'image' => 'self9.jpg',
                'price' => 50
            ),
            array (
                'name' => 'Your Second Life Begins',
                'author' => 'Raphaëlle Giordano',
                'image' => 'novel1.jpg',
                'price' => 50
            ),
            array (
                'name' => 'The Forty Rules of Love',
                'author' => 'Elif Shafak',
                'image' => 'novel2.jpg',
                'price' => 50
            ),
            array (
                'name' => 'الموريسكي',
                'author' => 'حسن أوريد',
                'image' => 'novel3.jpg',
                'price' => 50
            ),
            array (
                'name' => 'رسائل سقطت من ساعي البريد',
                'author' => 'يوسف الدموكي',
                'image' => 'novel4.jpg',
                'price' => 50
            ),
            array (
                'name' => 'ثلاثية غرناطة',
                'author' => 'رضوى عاشور',
                'image' => 'novel5.jpg',
                'price' => 50
            ),
            array (
                'name' => 'أرض البرتقال الحزين',
                'author' => 'غسان كنفاني',
                'image' => 'novel6.jpg',
                'price' => 50
            ),
            array (
                'name' => 'رواء مكة',
                'author' => 'حسن أوريد',
                'image' => 'novel7.jpg',
                'price' => 50
            ), array (
                'name' => 'كريسماس في مكة',
                'author' => 'أحمد خيري العمري',
                'image' => 'novel8.jpg',
                'price' => 50
            ),
            array (
                'name' => 'ثاني أكسيد الحب',
                'author' => 'منى سلامة',
                'image' => 'novel9.jpg',
                'price' => 50
            )
        );

    }



    return view ("categorie$id", ['tab' => $tab]);
});

Route::get('/browse', function(){
    return view('browse');
});



