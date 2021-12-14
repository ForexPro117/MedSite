<label for="polyclinic" class="secondary_title">Выберите поликлинику или больницу</label>
<div class="box">
    <div id="polyclinicCards" class="input-box">
        {{--                        поликлиники--}}
        <?php $i = 0 ?>
        @for($i = 0; $i < 10; $i++)
            <div id="<?php echo $i ?>" onclick="selectPolyclinic(<?php echo $i ?>)" class="grid_item">
                <img alt="photo" class="photo" src="../storage/photo_poly.jpg">
                <div class="text_about">
                    <h5 class="text_about_title"><?php echo $i?></h5>
                </div>
            </div>
        @endfor
    </div>
    <input id="delete_polyclinic" onclick="deletePolyclinic()" type="button" class="btn_delete">
</div>

