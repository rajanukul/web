<?php include("adminware/config/dbcon.php"); ?>

<?php
if(isset($_POST['add'])){

    $name=$_POST['name'];

    $email=$_POST['email'];

    $company=$_POST['company'];

    $role=$_POST['role'];

    $package=$_POST['package'];

    $date=date('Y-m-d', strtotime($_POST['date']));

    // $message=$_POST['message'];
    $message=mysqli_real_escape_string($con, $_POST['message']);

    $location=$_POST['location'];

    $query="insert into interview (name,email,company,role,salary,date,details,mode) values('$name','$email','$company','$role','$package','$date','$message','$location')";

    $query_run=mysqli_query($con,$query);

    // if($query_run){

    //     echo '<script>alert("Data Sent!, Thank you!")</script>';
        
    // }

    // else{

    //     echo '<script>alert("Something went wrong!")</script>';

    //     header("Location:index.php");



    // }

    

    

}


?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["add"])){
    $name=$_POST['name'];
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->Username = 'info@thejobcompany.in'; // Corrected here
    $mail->Password = 'Raj@*123456'; // Corrected here
    $mail->SMTPSecure ='ssl';
    $mail->Host = 'mail.thejobcompany.in';
    $mail->Port =465;
    $mail->setFrom('info@thejobcompany.in'); // Corrected here
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation - Interview Experience Submission';
    $mail->Body = '<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff;">
    <tbody>
        <tr>
            <td>
                <table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;">
                    <tbody>
                        <tr>
                            <td>
                                <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000; width: 600px; margin: 0 auto;" width="600">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-top: 6px solid #3B2A55; padding-bottom: 10px; padding-top: 15px; vertical-align: top; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                <table class="heading_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody><tr>
                                                        <td class="pad">
                                                            <h1 style="margin: 0; color: #3b2a55; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 38px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">The Job Company</span></h1>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;">
                    <tbody>
                        <tr>
                            <td>
                                <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000; width: 600px; margin: 0 auto;" width="600">
                                    <tbody>
                                        <tr class="reverse">
                                            <td class="column column-1 first" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 30px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                <div class="border">
                                                    <table class="heading_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody><tr>
                                                            <td class="pad" style="text-align:center;width:100%;">
                                                                <h1 style="margin: 0; color: #2a3940; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Dear <strong>User</strong>,</span></h1>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                    <table class="heading_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody><tr>
                                                            <td class="pad" style="padding-bottom:10px;padding-top:10px;text-align:center;width:100%;">
                                                                <h1 style="margin: 0; color: #2a3940; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 26px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">Thank you for sharing your interview experience with us!</h1>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </td>
                                            <td class="column column-2 last" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 10px; padding-right: 10px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                <div class="border">
                                                    <table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <tbody><tr>
                                                            <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
                                                                <div class="alignment" align="center" style="line-height:10px"><img src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7066/Talent_Seekers_header_image.png" style="display: block; height: auto; border: 0; max-width: 196px; width: 100%;" width="196" alt="Smiling woman with white shirt" title="Smiling woman with white shirt"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;">
                    <tbody>
                        <tr>
                            <td>
                                <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000; width: 600px; margin: 0 auto;" width="600">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 20px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                <table class="paragraph_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                    <tbody><tr>
                                                        <td class="pad">
                                                            <div style="color:#101112;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;mso-line-height-alt:19.2px;">
                                                                <p style="margin: 0; margin-bottom: 16px;">We have received your submission and appreciate your contribution to our community.</p>
                                                                <p style="margin: 0; margin-bottom: 16px;">Our team will carefully review your experience, and once approved, we will post it on our website for others to benefit from.</p>
                                                                <p style="margin: 0;">We understand the importance of sharing insights and experiences, and we value your time and effort in providing valuable information to our community.</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <table class="button_block block-2" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody><tr>
                                                        <td class="pad">
                                                            <div class="alignment" align="center"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://thejobcompany.in/" style="height:42px;width:131px;v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#7747FF"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a href="https://thejobcompany.in/" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#7747FF;border-radius:4px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;">Visit Website</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;">
                    <tbody>
                        <tr>
                            <td>
                                <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000; width: 600px; margin: 0 auto;" width="600">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 6px solid #3B2A55; padding-bottom: 10px; vertical-align: top; border-top: 0px; border-right: 0px; border-left: 0px;">
                                                <table class="social_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody><tr>
                                                        <td class="pad">
                                                            <div class="alignment" align="center">
                                                                <table class="social-table" width="184px" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;">
                                                                    <tbody><tr>
                                                                        <td style="padding:0 7px 0 7px;"><a href="https://thejobcompany.in/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-color/website@2x.png" width="32" height="32" alt="Web Site" title="Web Site" style="display: block; height: auto; border: 0;"></a></td>
                                                                        <td style="padding:0 7px 0 7px;"><a href="https://www.instagram.com/thejobcompany.in/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-color/instagram@2x.png" width="32" height="32" alt="Instagram" title="instagram" style="display: block; height: auto; border: 0;"></a></td>
                                                                        <td style="padding:0 7px 0 7px;"><a href="https://www.linkedin.com/company/100990267" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-color/linkedin@2x.png" width="32" height="32" alt="Linkedin" title="linkedin" style="display: block; height: auto; border: 0;"></a></td>
                                                                        <td style="padding:0 7px 0 7px;"><a href="https://chat.whatsapp.com/LybKuVKAHx4Lqef98vdL5s" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-color/whatsapp@2x.png" width="32" height="32" alt="WhatsApp" title="WhatsApp" style="display: block; height: auto; border: 0;"></a></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                    <tbody>
                        <tr>
                            <td>
                                <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000; width: 600px; margin: 0 auto;" width="600">
                                    <tbody>
                                        <tr>
                                            <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                <table class="icons_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody><tr>
                                                        <td class="pad" style="vertical-align: middle; color: #1e0e4b; font-family: sans-serif; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
                                                            <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                <tbody><tr>
                                                                    <td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                                                                        
                                                                            
                                                                        </td></tr></tbody></table>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
            </table>

';
    $mail->send();
    echo
    "
    <script>
    alert('sent Success');
    document.location.href='index.php';
    </script>
    ";
}
?>
