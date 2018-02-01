<style>
    .news-capt span {
        width: 98%;
    }
    .news-pic h2 {
    font-weight: 600;
    margin: 15px 0px;
}
.rn span {
    font-weight: 600;
    width: 90%;
}
</style>
            <div class="news-pic">
                <h2><?= $model->data->title; ?></h2>
                <div style="width:100%; height:auto;">
                    <img src="<?= $model->data->url_pic; ?>" alt="" style="width:100%; height:auto;">
                </div>
            </div>
            <div class="container mt-10">
                <div class="fl-l n-c">
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="<?= base_url(); ?>assets/img/EYEME/user-discover.png" alt="profil foto">
                                </a>
                            </td>
                            <td>
                                <ul>
                                    <li>
                                        <a href="">
                                            <span class="unname" style="text-transform: capitalize;"><?= $model->data->fullname; ?></span>
                                        </a>
                                    </li>
                                    <li class="c-g" style="display:block;">
                                        <span>
                                            <?php 
                                                $date       =  new DateTime($model->data->publish_on);
                                                $tanggal    = date_format($date,"Y-m-d");
                                                echo $tanggal;
                                            ?>
                                        </span>
                                        <span>.</span>
                                        <span>21:00 WIB</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="fl-r soc">
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="assets/img/icon/logo_fb.png" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="assets/img/icon/logo_twitter.png" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="assets/img/icon/logo_g_plus.png" alt="">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="garis-x3 mt-45"></div>
            <div class="news-capt m-t-10">
                <span><?= $model->data->description; ?></span>
            </div>
        </div>