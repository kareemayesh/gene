<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="page-header">
    <h1 style="text-align: center">انشئ جدولك الغذائي</h1>
</div>
<div class="container-fluid">
    <form action="/TablePrint" method="post">
        {{csrf_field()}}
    <div class="row">
        <div class="col-lg-4"><input class="form-control" type="text" name="name" placeholder="ادخل الاسم"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><input class="form-control" type="date" name="date"></div>
    </div>

    <table class="table table-bordered table-striped">
       <thead>
       <th>اليوم</th>
       <th>الفطور</th>
       <th>الغداء</th>
       <th>العشاء</th>
       </thead>
        <tbody>
        <tr>
            <td>السبت</td>
            <td><select  name="w1d1b1" class="form-control">
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>

                     <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                     <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                     <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d1b2" class="form-control">
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                     <option value="1 تفاحة" >1 تفاحة</option>
                     <option value="1 برتقالة" > 1 برتقالة</option>
                     <option value="2 حبة بندورة" >2 حبة بندورة </option>
                     <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                     <option value=" 2 حبة خيار " >2 حبة خيار</option>

                     <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d1l1" class="form-control">
                    <option ></option>
                     <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                     <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                     <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                     <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                     <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                  <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w1d1l2" class="form-control">

                     <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                     <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                     <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                     <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                     <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                        <option ></option>
                    </select></div> </td>
            <td > </select><select name="w1d1d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select   name="w1d1d2" class="form-control">
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                     <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                </select></div> </td>

        </tr>
        <tr>
            <td>الاحد</td>
            <td><select  name="w1d2b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d2b2" class="form-control">
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>

                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d2l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select name="w1d2l2" class="form-control">
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>

                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                         <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w1d2d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select   name="w1d2d2" class="form-control">
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>

                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الاثنين</td>
            <td><select  name="w1d3b1" class="form-control">
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>

                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d3b2" class="form-control">
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>

                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d3l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w1d3l2" class="form-control">
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                         </select></div> </td>
            <td > </select><select name="w1d3d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select   name="w1d3d2" class="form-control">

                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>

                        <option ></option><option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الثلاثاء</td>
            <td><select  name="w1d4b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d4b2" class="form-control">
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>

                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d4l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w1d4l2" class="form-control">
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        </select></div> </td>
            <td > </select><select name="w1d4d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select   name="w1d4d2" class="form-control">
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                         <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الاربعاء</td>
            <td><select  name="w1d5b1" class="form-control">
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>

                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d5b2" class="form-control">
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>

                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d5l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select name="w1d5l2" class="form-control">

                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w1d5d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select  name="w1d5d2" class="form-control">
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الخميس</td>
            <td><select  name="w1d6b1" class="form-control">
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d6b2" class="form-control">
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="1 تفاحة" >1 تفاحة</option>

                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d6l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w1d6l2" class="form-control">
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                          <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w1d6d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select  name="w1d6d2" class="form-control">
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>

                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الجمعة</td>
            <td><select  name="w1d7b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w1d7b2" class="form-control">
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>

                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w1d7l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w1d7l2" class="form-control">
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                         <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w1d7d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select   name="w1d7d2" class="form-control">
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <!-- -->
        <tr>
            <td>السبت</td>
            <td><select  name="w2d1b1" class="form-control">
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>

                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d1b2" class="form-control">
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>

                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d1l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w2d1l2" class="form-control">
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                           <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d1d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select  name="w2d1d2" class="form-control">
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الاحد</td>
            <td><select  name="w2d2b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d2b2" class="form-control">
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>

                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d2l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w2d2l2" class="form-control">
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                             <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d2d1" class="form-control">
                    <option ></option>
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>

                </select><div class="galler_attr"  ><select   name="w2d2d2" class="form-control">

                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option ></option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الاثنين</td>
            <td><select  name="w2d3b1" class="form-control">
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>

                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d3b2" class="form-control">
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>

                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d3l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w2d3l2" class="form-control">

                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>

                        <option ></option><option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d3d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select   name="w2d3d2" class="form-control">
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>

                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الثلاثاء</td>
            <td><select  name="w2d4b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d4b2" class="form-control">
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>

                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d4l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select name="w2d4l2" class="form-control">

                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                       <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d4d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select  name="w2d4d2" class="form-control">
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option ></option>
                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                         <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الاربعاء</td>
            <td><select  name="w2d5b1" class="form-control">
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>

                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d5b2" class="form-control">
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>

                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d5l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select name="w2d5l2" class="form-control">
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                           <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d5d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select   name="w2d5d2" class="form-control">

                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                        <option ></option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الخميس</td>
            <td><select  name="w2d6b1" class="form-control">
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                     <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d6b2" class="form-control">
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="1 تفاحة" >1 تفاحة</option>

                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d6l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w2d6l2" class="form-control">
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                        <option ></option>
                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                         <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    </select></div> </td>
            <td > </select><select name="w2d6d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select   name="w2d6d2" class="form-control">
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>

                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                         <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                        <option ></option>
                    </select></div> </td>

        </tr>
        <tr>
            <td>الجمعة</td>
            <td><select  name="w2d7b1" class="form-control">
                    <option value="1-2 علبة لبن رايب">1-2 علبة لبن رايب</option>
                    <option value="1-2 بيضة مسلوقة" >1-2 بيضة مسلوقة</option>
                    <option value="1-2 علبة لبن اب" >1-2 علبة لبن اب</option>
                    <option value="2 قطعة جبنة قريش قليل الدسم" >2 قطعة جبنة قريش قليل الدسم</option>
                    <option value="صحن رقائق ذرة + حليب قليل الدسم" >صحن رقائق ذرة + حليب قليل الدسم</option>
                    <option ></option>
                </select><select name="w2d7b2" class="form-control">
                    <option value=" 2 حبة خيار " >2 حبة خيار</option>
                    <option value="1 تفاحة" >1 تفاحة</option>
                    <option value="1 برتقالة" > 1 برتقالة</option>
                    <option value="2 حبة بندورة" >2 حبة بندورة </option>
                    <option value=" 1 حبة فلفل حلو" >1 حبة فلفل حلو</option>

                    <option value="2 شريحة بطيخ" >2 شريحة بطيخ</option>
                    <option value="2 شريحة شمام" >2 شريحة شمام</option>
                    <option ></option>
                </select> </td>
            <td><select name="w2d7l1" class="form-control">
                    <option ></option>
                    <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                    <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                    <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                    <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                    <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                 <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>

                </select><div class="galler_attr"  ><select  name="w2d7l2" class="form-control">

                        <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                        <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                        <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                        <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>

                        <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                        <option ></option>
                    </select></div> </td>
            <td > </select><select name="w2d7d1" class="form-control">
                    <option value="سلطة خضراء : خس , بندورة , خيار , جرجير" >سلطة خضراء : خس , بندورة , خيار , جرجير</option>
                    <option value=" علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء" >2 علبة لبن اب او 2 قطعة جبنة قريش + سلطة خضراء </option>
                    <option value="صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ" >صنف واحد من الفاكهة :تفاح-اجاص - برتقال-بطيخ</option>
                    <option value="شوربة خضار بدون بطاطا , ذرة , معكرونة" >شوربة خضار بدون بطاطا , ذرة , معكرونة </option>
                    <option value="  2 بيضة مسلوقة + بندورة" >2 بيضة مسلوقة + بندورة</option>
                    <option ></option>
                </select><div class="galler_attr"  ><select   name="w2d7d2" class="form-control">

                        <option value="250 غرام صدر دجاج مشوي" >250 غرام صدر دجاج مشوي</option>
                        <option value=" 250 غرام سمك مشوي" >250 غرام سمك مشوي</option>
                        <option value="250 غرام لحم عجل مشوي بدون دهن" >250 غرام لحم عجل مشوي بدون دهن</option>
                        <option value="ا علبة تونة مصفاة من الزيت" >ا علبة تونة مصفاة من الزيت</option>
                        <option value="2 صحن شوربة عدس" >2 صحن شوربة عدس</option>
                     <option value=" 2 صحن فول مدمس" >2 صحن فول مدمس</option>
                        <option ></option>
                    </select></div> </td>

        </tr>
        </tbody>
    </table>
        <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-block btn-primary" type="submit">send</button>
            </div>
        </div>
    </form>
</div>
<script>


        $('.galler_attr').bind('click', function() {
            $(':first-child', this).css('visibility', 'visible');
        });


</script>
</body>
</html>