<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btn'])) {
    guimail();
}

function guimail() {
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2; // 0 = off (for production use), 1 = client messages, 2 = client and server messages
        $mail->isSMTP(); 
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com'; // SMTP server address
        $mail->SMTPAuth = true; 
        $mail->Username = 'magiceducationcs1@gmail.com';
        $mail->Password = 'xhnx pbwi vkmd bpot'; // Application-specific password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to

        // Recipients
        $mail->setFrom('magiceducationcs1@gmail.com', 'Magic.edu');
        $mail->addAddress('magiceducationcs1@gmail.com', 'minh');

        // Content
        $mail->isHTML(true); 
        $mail->Subject = 'Tiêu đề thư';
        $noidungthu = "
            <h3>Thư liên hệ từ khách hàng</h3>
            <p>Tên khách hàng: <br>{$_POST['ten']}</p>
            <p>Số điện thoại khách hàng: <br>{$_POST['sdt']}</p>
            <p>Email khách hàng: <br>{$_POST['email']}</p>
            <p>Nội dung liên hệ: <br>{$_POST['noidung']}</p>
        ";
        $mail->Body = nl2br($noidungthu);

        // Disable SSL verification to fix SSL issues (optional and not recommended for production)
        $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $mail->send();
        header("Location: index.php?pg=lienhe_guimailxong");
        exit();
    } catch (Exception $e) {
        echo "Mail không gửi được. Lỗi: {$mail->ErrorInfo}";
    }
}
?>

<main>
    <div class="row">
        <div class="top containi">
            <h3>Hỗ trợ</h3>
            <hr>
            <div class="div-flex">
                <div class="arcile-lh">
                    <div class="noi-dung-arcile-lh">
                        <form method="POST" action="">
                            <div class="thongttin3">
                                <input type="text" name="ten" id="ttt" placeholder="Nhập tên">
                            </div>
                            <div class="thongttin3">
                                <input type="text" name="sdt" id="ttt" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="thongttin3">
                                <input type="text" name="email" id="ttt" placeholder="Nhập Email">
                            </div>
                            <div class="thongttin3">
                                <textarea name="noidung" id="tttt" cols="30" rows="10" placeholder="Nhập nội dung hỗ trợ"></textarea>
                            </div>
                            <input type="submit" value="Gửi" name="btn" class="form-submit">
                        </form>
                    </div>
                </div>
                <div class="acile-lh">
                    <div class="noi-dung-acile-lh">
                        <div class="tieudelh">
                            <h3>Thông tin liên hệ</h3>
                        </div>
                        <hr>
                        <div class="div-acicle-lh">
                            <div class="noidung-lh">
                                <i class="fa-solid fa-location-dot"></i> Địa chỉ : Thành phố Hồ Chí Minh
                            </div>
                            <div class="noidung-lh">
                                <i class="fa-solid fa-phone"></i> Số điện thoại : 0372104288
                            </div>
                            <div class="noidung-lh">
                                <i class="fa-solid fa-envelope"></i> Email : talasoaica234@gamil.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
