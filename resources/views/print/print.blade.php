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
<div class="container">
    <div class="row">
        <div class="col-lg-4"><h3>{{"الاسم : ".$data['name']}}</h3></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><h3>{{"التاريخ : ".$data['date']}}</h3></div>
    </div>
    <div class="row">

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
            <th>اليوم</th>
            <th>الفطور</th>
            <th>الغداء</th>
            <th>العشاء</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>السبت</td>
                <td><?php
                    if ($data['w1d1b1'] !== ''){

                    if ($data['w1d1b2']!== ''){
                    echo $data['w1d1b1']." + ".$data['w1d1b2'] ;

                    }else{echo $data['w1d1b1'];}}elseif ($data['w1d1b2'] !== ''){ echo $data['w1d1b2'];} ?>

                    </td>
                <td>
                    <?php
                    if ($data['w1d1l1'] !== ''){

                        if ($data['w1d1l2']!== ''){
                            echo $data['w1d1l1']." + ".$data['w1d1l2'] ;

                        }else{echo $data['w1d1l1'];}}elseif ($data['w1d1l2'] !== ''){ echo $data['w1d1l2'];} ?></td>
                <td><?php
                    if ($data['w1d1d1'] !== ''){

                        if ($data['w1d1d2']!== ''){
                            echo $data['w1d1d1']." + ".$data['w1d1d2'] ;

                        }else{echo $data['w1d1d1'];}}elseif ($data['w1d1d2'] !== ''){ echo $data['w1d1d2'];} ?></td>
            </tr>
            <tr>
                <td>الاحد</td>
                <td><?php
                    if ($data['w1d2b1'] !== ''){

                        if ($data['w1d2b2']!== ''){
                            echo $data['w1d2b1']." + ".$data['w1d2b2'] ;

                        }else{echo $data['w1d2b1'];}}elseif ($data['w1d2b2'] !== ''){ echo $data['w1d2b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d2l1'] !== ''){

                        if ($data['w1d2l2']!== ''){
                            echo $data['w1d2l1']." + ".$data['w1d2l2'] ;

                        }else{echo $data['w1d2l1'];}}elseif ($data['w1d2l2'] !== ''){ echo $data['w1d2l2'];} ?></td>
                <td><?php
                    if ($data['w1d2d1'] !== ''){

                        if ($data['w1d2d2']!== ''){
                            echo $data['w1d2d1']." + ".$data['w1d2d2'] ;

                        }else{echo $data['w1d2d1'];}}elseif ($data['w1d2d2'] !== ''){ echo $data['w1d2d2'];} ?></td>
            </tr>
            <tr>
                <td>الاثنين</td>
                <td><?php
                    if ($data['w1d3b1'] !== ''){

                        if ($data['w1d3b2']!== ''){
                            echo $data['w1d3b1']." + ".$data['w1d3b2'] ;

                        }else{echo $data['w1d3b1'];}}elseif ($data['w1d3b2'] !== ''){ echo $data['w1d3b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d3l1'] !== ''){

                        if ($data['w1d3l2']!== ''){
                            echo $data['w1d3l1']." + ".$data['w1d3l2'] ;

                        }else{echo $data['w1d3l1'];}}elseif ($data['w1d3l2'] !== ''){ echo $data['w1d3l2'];} ?></td>
                <td><?php
                    if ($data['w1d3d1'] !== ''){

                        if ($data['w1d3d2']!== ''){
                            echo $data['w1d3d1']." + ".$data['w1d3d2'] ;

                        }else{echo $data['w1d3d1'];}}elseif ($data['w1d3d2'] !== ''){ echo $data['w1d3d2'];} ?></td>
            </tr>
            <tr>
                <td>الثلاثاء</td>
                <td><?php
                    if ($data['w1d4b1'] !== ''){

                        if ($data['w1d4b2']!== ''){
                            echo $data['w1d4b1']." + ".$data['w1d4b2'] ;

                        }else{echo $data['w1d4b1'];}}elseif ($data['w1d4b2'] !== ''){ echo $data['w1d4b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d4l1'] !== ''){

                        if ($data['w1d4l2']!== ''){
                            echo $data['w1d4l1']." + ".$data['w1d4l2'] ;

                        }else{echo $data['w1d4l1'];}}elseif ($data['w1d4l2'] !== ''){ echo $data['w1d4l2'];} ?></td>
                <td><?php
                    if ($data['w1d4d1'] !== ''){

                        if ($data['w1d4d2']!== ''){
                            echo $data['w1d4d1']." + ".$data['w1d4d2'] ;

                        }else{echo $data['w1d4d1'];}}elseif ($data['w1d4d2'] !== ''){ echo $data['w1d4d2'];} ?></td>
            </tr>
            <tr>
                <td>الاربعاء</td>
                <td><?php
                    if ($data['w1d5b1'] !== ''){

                        if ($data['w1d5b2']!== ''){
                            echo $data['w1d5b1']." + ".$data['w1d5b2'] ;

                        }else{echo $data['w1d5b1'];}}elseif ($data['w1d5b2'] !== ''){ echo $data['w1d5b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d5l1'] !== ''){

                        if ($data['w1d5l2']!== ''){
                            echo $data['w1d5l1']." + ".$data['w1d5l2'] ;

                        }else{echo $data['w1d5l1'];}}elseif ($data['w1d5l2'] !== ''){ echo $data['w1d5l2'];} ?></td>
                <td><?php
                    if ($data['w1d5d1'] !== ''){

                        if ($data['w1d5d2']!== ''){
                            echo $data['w1d5d1']." + ".$data['w1d5d2'] ;

                        }else{echo $data['w1d5d1'];}}elseif ($data['w1d5d2'] !== ''){ echo $data['w1d5d2'];} ?></td>
            </tr>
            <tr>
                <td>الخميس</td>
                <td><?php
                    if ($data['w1d6b1'] !== ''){

                        if ($data['w1d6b2']!== ''){
                            echo $data['w1d6b1']." + ".$data['w1d6b2'] ;

                        }else{echo $data['w1d6b1'];}}elseif ($data['w1d6b2'] !== ''){ echo $data['w1d6b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d6l1'] !== ''){

                        if ($data['w1d6l2']!== ''){
                            echo $data['w1d6l1']." + ".$data['w1d6l2'] ;

                        }else{echo $data['w1d6l1'];}}elseif ($data['w1d6l2'] !== ''){ echo $data['w1d6l2'];} ?></td>
                <td><?php
                    if ($data['w1d6d1'] !== ''){

                        if ($data['w1d6d2']!== ''){
                            echo $data['w1d6d1']." + ".$data['w1d6d2'] ;

                        }else{echo $data['w1d6d1'];}}elseif ($data['w1d6d2'] !== ''){ echo $data['w1d6d2'];} ?></td>
            </tr>
            <tr>
                <td>الجمعة</td>
                <td><?php
                    if ($data['w1d7b1'] !== ''){

                        if ($data['w1d7b2']!== ''){
                            echo $data['w1d7b1']." + ".$data['w1d7b2'] ;

                        }else{echo $data['w1d7b1'];}}elseif ($data['w1d7b2'] !== ''){ echo $data['w1d7b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w1d7l1'] !== ''){

                        if ($data['w1d7l2']!== ''){
                            echo $data['w1d7l1']." + ".$data['w1d7l2'] ;

                        }else{echo $data['w1d7l1'];}}elseif ($data['w1d7l2'] !== ''){ echo $data['w1d7l2'];} ?></td>
                <td><?php
                    if ($data['w1d7d1'] !== ''){

                        if ($data['w1d7d2']!== ''){
                            echo $data['w1d7d1']." + ".$data['w1d7d2'] ;

                        }else{echo $data['w1d7d1'];}}elseif ($data['w1d7d2'] !== ''){ echo $data['w1d7d2'];} ?></td>
            </tr> 
            <!-- -->
            <tr>
                <td>السبت</td>
                <td><?php
                    if ($data['w2d1b1'] !== ''){

                        if ($data['w2d1b2']!== ''){
                            echo $data['w2d1b1']." + ".$data['w2d1b2'] ;

                        }else{echo $data['w2d1b1'];}}elseif ($data['w2d1b2'] !== ''){ echo $data['w2d1b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d1l1'] !== ''){

                        if ($data['w2d1l2']!== ''){
                            echo $data['w2d1l1']." + ".$data['w2d1l2'] ;

                        }else{echo $data['w2d1l1'];}}elseif ($data['w2d1l2'] !== ''){ echo $data['w2d1l2'];} ?></td>
                <td><?php
                    if ($data['w2d1d1'] !== ''){

                        if ($data['w2d1d2']!== ''){
                            echo $data['w2d1d1']." + ".$data['w2d1d2'] ;

                        }else{echo $data['w2d1d1'];}}elseif ($data['w2d1d2'] !== ''){ echo $data['w2d1d2'];} ?></td>
            </tr>
            <tr>
                <td>الاحد</td>
                <td><?php
                    if ($data['w2d2b1'] !== ''){

                        if ($data['w2d2b2']!== ''){
                            echo $data['w2d2b1']." + ".$data['w2d2b2'] ;

                        }else{echo $data['w2d2b1'];}}elseif ($data['w2d2b2'] !== ''){ echo $data['w2d2b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d2l1'] !== ''){

                        if ($data['w2d2l2']!== ''){
                            echo $data['w2d2l1']." + ".$data['w2d2l2'] ;

                        }else{echo $data['w2d2l1'];}}elseif ($data['w2d2l2'] !== ''){ echo $data['w2d2l2'];} ?></td>
                <td><?php
                    if ($data['w2d2d1'] !== ''){

                        if ($data['w2d2d2']!== ''){
                            echo $data['w2d2d1']." + ".$data['w2d2d2'] ;

                        }else{echo $data['w2d2d1'];}}elseif ($data['w2d2d2'] !== ''){ echo $data['w2d2d2'];} ?></td>
            </tr>
            <tr>
                <td>الاثنين</td>
                <td><?php
                    if ($data['w2d3b1'] !== ''){

                        if ($data['w2d3b2']!== ''){
                            echo $data['w2d3b1']." + ".$data['w2d3b2'] ;

                        }else{echo $data['w2d3b1'];}}elseif ($data['w2d3b2'] !== ''){ echo $data['w2d3b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d3l1'] !== ''){

                        if ($data['w2d3l2']!== ''){
                            echo $data['w2d3l1']." + ".$data['w2d3l2'] ;

                        }else{echo $data['w2d3l1'];}}elseif ($data['w2d3l2'] !== ''){ echo $data['w2d3l2'];} ?></td>
                <td><?php
                    if ($data['w2d3d1'] !== ''){

                        if ($data['w2d3d2']!== ''){
                            echo $data['w2d3d1']." + ".$data['w2d3d2'] ;

                        }else{echo $data['w2d3d1'];}}elseif ($data['w2d3d2'] !== ''){ echo $data['w2d3d2'];} ?></td>
            </tr>
            <tr>
                <td>الثلاثاء</td>
                <td><?php
                    if ($data['w2d4b1'] !== ''){

                        if ($data['w2d4b2']!== ''){
                            echo $data['w2d4b1']." + ".$data['w2d4b2'] ;

                        }else{echo $data['w2d4b1'];}}elseif ($data['w2d4b2'] !== ''){ echo $data['w2d4b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d4l1'] !== ''){

                        if ($data['w2d4l2']!== ''){
                            echo $data['w2d4l1']." + ".$data['w2d4l2'] ;

                        }else{echo $data['w2d4l1'];}}elseif ($data['w2d4l2'] !== ''){ echo $data['w2d4l2'];} ?></td>
                <td><?php
                    if ($data['w2d4d1'] !== ''){

                        if ($data['w2d4d2']!== ''){
                            echo $data['w2d4d1']." + ".$data['w2d4d2'] ;

                        }else{echo $data['w2d4d1'];}}elseif ($data['w2d4d2'] !== ''){ echo $data['w2d4d2'];} ?></td>
            </tr>
            <tr>
                <td>الاربعاء</td>
                <td><?php
                    if ($data['w2d5b1'] !== ''){

                        if ($data['w2d5b2']!== ''){
                            echo $data['w2d5b1']." + ".$data['w2d5b2'] ;

                        }else{echo $data['w2d5b1'];}}elseif ($data['w2d5b2'] !== ''){ echo $data['w2d5b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d5l1'] !== ''){

                        if ($data['w2d5l2']!== ''){
                            echo $data['w2d5l1']." + ".$data['w2d5l2'] ;

                        }else{echo $data['w2d5l1'];}}elseif ($data['w2d5l2'] !== ''){ echo $data['w2d5l2'];} ?></td>
                <td><?php
                    if ($data['w2d5d1'] !== ''){

                        if ($data['w2d5d2']!== ''){
                            echo $data['w2d5d1']." + ".$data['w2d5d2'] ;

                        }else{echo $data['w2d5d1'];}}elseif ($data['w2d5d2'] !== ''){ echo $data['w2d5d2'];} ?></td>
            </tr>
            <tr>
                <td>الخميس</td>
                <td><?php
                    if ($data['w2d6b1'] !== ''){

                        if ($data['w2d6b2']!== ''){
                            echo $data['w2d6b1']." + ".$data['w2d6b2'] ;

                        }else{echo $data['w2d6b1'];}}elseif ($data['w2d6b2'] !== ''){ echo $data['w2d6b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d6l1'] !== ''){

                        if ($data['w2d6l2']!== ''){
                            echo $data['w2d6l1']." + ".$data['w2d6l2'] ;

                        }else{echo $data['w2d6l1'];}}elseif ($data['w2d6l2'] !== ''){ echo $data['w2d6l2'];} ?></td>
                <td><?php
                    if ($data['w2d6d1'] !== ''){

                        if ($data['w2d6d2']!== ''){
                            echo $data['w2d6d1']." + ".$data['w2d6d2'] ;

                        }else{echo $data['w2d6d1'];}}elseif ($data['w2d6d2'] !== ''){ echo $data['w2d6d2'];} ?></td>
            </tr>
            <tr>
                <td>الجمعة</td>
                <td><?php
                    if ($data['w2d7b1'] !== ''){

                        if ($data['w2d7b2']!== ''){
                            echo $data['w2d7b1']." + ".$data['w2d7b2'] ;

                        }else{echo $data['w2d7b1'];}}elseif ($data['w2d7b2'] !== ''){ echo $data['w2d7b2'];} ?>

                </td>
                <td>
                    <?php
                    if ($data['w2d7l1'] !== ''){

                        if ($data['w2d7l2']!== ''){
                            echo $data['w2d7l1']." + ".$data['w2d7l2'] ;

                        }else{echo $data['w2d7l1'];}}elseif ($data['w2d7l2'] !== ''){ echo $data['w2d7l2'];} ?></td>
                <td><?php
                    if ($data['w2d7d1'] !== ''){

                        if ($data['w2d7d2']!== ''){
                            echo $data['w2d7d1']." + ".$data['w2d7d2'] ;

                        }else{echo $data['w2d7d1'];}}elseif ($data['w2d7d2'] !== ''){ echo $data['w2d7d2'];} ?></td>
            </tr>


            </tbody>
        </table>
    </div>
</div>
</body>
</html>