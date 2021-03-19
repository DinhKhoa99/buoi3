<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="author" content="hoangdinhkhoa"/>
    <link href="site.css" rel="stylesheet"/>
    <title>Xep loai ket qua tuyen sinh</title>
</head>

<body>
    <div id="form_content">
    <div id="wrapper">
    <h2>Xep loai ket qua tuyen sinh</h2>
    <form action="#" method="post">
    <!-- Mon toan -->
        <div class="row">
            <div class="lbltitle">
                <label>Diem mon Toan</label>
            </div>
            <div class="lblinput">
            <input type="number" max="10" min="0" name="Toan" value="<?php echo isset($_POST["Toan"]) ?$_POST["Toan"] : "" ; ?>" required/>
            </div>
        </div>
    <!-- Mon Ly -->
    <div class="row">
            <div class="lbltitle">
                <label>Diem mon Ly</label>
            </div>
            <div class="lblinput">
            <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"]) ?
            $_POST["Ly"] : "" ; ?>" max="10" min="0" required/>
            </div>
        </div>
        <!-- Mon Hoa -->
    <div class="row">
            <div class="lbltitle">
                <label>Diem mon Hoa</label>
            </div>
            <div class="lblinput">
            <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ?
            $_POST["Hoa"] : "" ; ?>" max="10" min="0" required/>
            </div>
        </div>
         <!-- Diem bo sung -->
         <div class="row">
                <label>Chon khu vuc</label>
            </div>
            <div class="lblinput">
                <select name="KhuVuc" id="chonkhuvuc">
                    <!-- <option value="" selected>Chon khu vuc</option>
                    <option value="1">Khu vuc 1</option>
                    <option value="2">Khu vuc 2</option>
                    <option value="3">Khu vuc 3</option>
                    <option value="4">Khu vuc 4</option>
                    <option value="5">Khu vuc 5</option> -->

                    <!-- <option value="" selected>Chọn khu vực</option>
                        <option value="1"<?php echo isset($_POST["KhuVuc"])? ' selected="selected"': "";?>>Khu vuc 1</option>
                        <option value="2"<?php echo isset($_POST["KhuVuc"])? ' selected="selected"': "";?>>Khu vuc 2</option>
                        <option value="3"<?php echo isset($_POST["KhuVuc"])? ' selected="selected"': "";?>>Khu vuc 3</option>
                        <option value="4"<?php echo isset($_POST["KhuVuc"])? ' selected="selected"': "";?>>Khu vuc 4</option>
                        <option value="5"<?php echo isset($_POST["KhuVuc"])? ' selected="selected"': "";?>>Khu vuc 5</option> -->

                        <option value="" selected>Chon khu vuc</option>
                        <option value="1"<?php echo (isset($_POST["KhuVuc"])&& $_POST["KhuVuc"] == "1")? ' selected="selected"': "";?>>Khu vuc 1</option>
                        <option value="2"<?php echo (isset($_POST["KhuVuc"])&& $_POST["KhuVuc"] == "2")? ' selected="selected"': "";?>>Khu vuc 2</option>
                        <option value="3"<?php echo (isset($_POST["KhuVuc"])&& $_POST["KhuVuc"] == "3")? ' selected="selected"': "";?>>Khu vuc 3</option>
                        <option value="4"<?php echo (isset($_POST["KhuVuc"])&& $_POST["KhuVuc"] == "4")? ' selected="selected"': "";?>>Khu vuc 4</option>
                        <option value="5"<?php echo (isset($_POST["KhuVuc"])&& $_POST["KhuVuc"] == "5")? ' selected="selected"': "";?>>Khu vuc 5</option>


                </select>
            </div>
        <!-- Nut gui form -->
        <div class="row">
            <div class="submit">
            <input type="submit" name="btnsubmit" value="Xep loai"/>
            </div>
        </div>
    </form>
        <!-- Hien thi ket qua tinh toan -->
        <div id="result">
            <h2>Ket qua xep loai</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Tong diem</label>
                </div>
                <div class="lbloutput">
                    <?php
                        echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"]: "";
                        ?>
                </div>
            </div>
        </div>
        <!-- Xep loai -->
        <div class="row">
            <div class="lbltitle">
                <label>Xep loai</label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST["btnsubmit"])){
                        $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                        if($TongDiem>=24)
                        echo "Gioi";
                        else if($TongDiem>=21)
                        echo "Kha";
                        else if($TongDiem >=15)
                        echo "Trung binh";
                        else
                            echo "Yeu";
                    }
                    ?>
            </div>
        </div>
        <!-- Diem uu tien -->
        <!-- <div class="row">
            <div class="lbltitle">
                <label>Diem uu tien</label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST["btnsubmit"]))
                    {
                        $DiemUuTien = empty($_POST["Khuvuc"]) ? 0: $_POST["KhuVuc"];
                        switch ($DiemUuTien){
                            case 0:
                            case 4:
                            case 5:
                                echo "0";
                                break;
                            case 1:
                            case 2:
                                echo "5";
                                break;
                            case 3:
                                echo "3";
                                break;
                            default:
                                break;
                        }
                    }
                    ?>
            </div>
        </div> -->
        <div class="row">
                <div class="lbltitle">
                    <label>Điem uu tien</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if(isset($_POST["btnsubmit"])){
                            $DiemUuTien = empty($_POST["KhuVuc"])?0:$_POST["KhuVuc"];
                            switch ($DiemUuTien){
                                case 0:
                                case 4:
                                case 5:
                                    echo "0";
                                    break;
                                case 1:
                                case 2:
                                    echo "5";
                                    break;
                                case 3: echo "3";
                                        break;
                                default: break;
                            }
                        }?>
                </div>
            </div>
    </div>
    </div>
</body>
</html>

<!-- con thi cham
to thi khoi
id thi thawng -->