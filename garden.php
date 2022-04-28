<?php 
$pageTitle="Garden";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
if (!isset($_SESSION['user_email'])) { 
    // if user not logged in,
    header("location: logins.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28528889ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    
    <title>Garden</title>
</head>
<body>    
<section class="classroom">
        <br><center><h1 style="color: black;">Garden Information</h1></center>
        <center><p style="color: black; padding: 25px 50px 5px 50px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam cursus ex quis ligula condimentum, nec viverra quam bibendum. Nullam eleifend vel quam non dapibus. Ut vehicula est sem, non mattis velit rhoncus scelerisque. Ut non est tristique lorem porttitor sollicitudin. Quisque facilisis mauris sed lectus elementum, molestie ullamcorper felis sollicitudin. Ut sit amet est vitae mauris mollis viverra. <br><br>Vivamus a congue nulla, non aliquet ante.
                Nulla non luctus dolor, quis laoreet erat. Sed imperdiet auctor feugiat. Phasellus ornare quis nisi ac feugiat. Curabitur vestibulum efficitur mauris, eget tempus risus porttitor id. In feugiat gravida sem, at molestie libero efficitur at. Fusce at ligula in sem semper mattis eu quis est. Vivamus imperdiet tortor eu ex posuere euismod.</p></center>
        
</section>
        <div class = "GridBrick5" id="Drogheda5"><p></p></div>
        <div class = "GridBrick6" id="Drogheda6"></div>
        <center><h2> Gallery </h2></center>
        <div class = "GridBrick6Sub">
            <div id = "GalleryOuterContainer">
                <div id="GalleryInnerContainer">
                    <div id="CardStack">

                        <!-- images to for the spinning gallery no more than 150kb each -->

                        <img id = "garden1" src="images/classroom1.jpg" alt=""> <!-- https://www.flickr.com/photos/henriknorberg/8434038236/in/photolist-dRhDJm-27RC2mR-FGyF69-FDWEkX-a5ig4P-DuUFW3-7CMtBw-QfYYRT-qh8ptm-nAYvR3-bBMTVQ-4ip3B1-kFJNq9-9aRYof-QLcvRN-4AQRJg-HxKtyR-8eMLMZ-no1ffK-8qip7-QZWssL-59S2B8-24DLkR7-GUwDZk-caRZkE-683Sei-dATXiq-27ka2BJ-fto3ad-auyupd-MsKKat-gLWTk7-Mrdyg3-Epi6G-7ainPh-G6Povr-DuCciP-2gd9g8-6yZ5Hk-pwQ9VT-4CyRuR-fkxU4-p2rV3o-MUMPsb-doSh5a-dANuxe-9ssddN-2cmTUK9-fmp4Jj-Y2mawV -->
                        <img id = "garden2" src="images/classroom2.jpg" alt=""> <!-- https://www.flickr.com/photos/chriskantos/2363363831/in/photolist-4AQRJg-HxKtyR-8eMLMZ-no1ffK-8qip7-QZWssL-59S2B8-24DLkR7-GUwDZk-caRZkE-683Sei-dATXiq-27ka2BJ-fto3ad-auyupd-MsKKat-gLWTk7-Mrdyg3-Epi6G-7ainPh-G6Povr-DuCciP-2gd9g8-6yZ5Hk-pwQ9VT-4CyRuR-fkxU4-p2rV3o-MUMPsb-doSh5a-dANuxe-9ssddN-2cmTUK9-fmp4Jj-Y2mawV-MYTxbq-2is4UxA-4SUMKF-dUvN1V-uZR8e-q1xLYp-2h2rQRv-9mVnVM-6L1YDc-2Tbn77-2g3ayAd-51P7sX-xtf8H6-aNtf6x-9Zj7pv -->
                        <img id = "garden3" src="images/classroom3.jpg" alt=""> <!-- https://www.flickr.com/photos/unpossibles/16742285028/in/photolist-rvsA3G-8omAC1-PtQase-kAVwPh-4nygP-8cgJYM-asZgA-7tWo36-CVttqY-6atzFQ-9oESB4-NeKV1-7Gn7UY-rvA5LF-7sLx4M-rMVJTw-rvA5sV-2hDyBMa-dLTew8-rtHQJX-rKKzhy-PHcNFr-8kTTt3-oFTRzq-2iKnvAL-H8Hsu2-2ivYoDH-2hzLit6-2iKBtV9-2e9pde2-2iQ3433-2gSDEgd-2iCEkwq-qeQmXU-FJCgtJ-CN7ewY-qR3tNE-FRLt8N-4q2Mxu-r5EFuF-4q2MdL-8wKtTn-CFBqfa-2gc6v8X-dK8ZGf-7SdJRF-4q2Mwh-MHD3H-pCeg9q-PfcLKF -->
                        <img id = "garden4" src="images/classroom4.jpg" alt=""> <!-- https://www.flickr.com/photos/bmbci/5507401545/in/photolist-9oESB4-NeKV1-7Gn7UY-rvA5LF-7sLx4M-rMVJTw-rvA5sV-2hDyBMa-dLTew8-rtHQJX-rKKzhy-PHcNFr-8kTTt3-oFTRzq-2iKnvAL-H8Hsu2-2ivYoDH-2hzLit6-2iKBtV9-2e9pde2-2iQ3433-2gSDEgd-2iCEkwq-qeQmXU-FJCgtJ-CN7ewY-qR3tNE-FRLt8N-4q2Mxu-r5EFuF-4q2MdL-8wKtTn-CFBqfa-2gc6v8X-dK8ZGf-7SdJRF-4q2Mwh-MHD3H-pCeg9q-PfcLKF-BkjmRD-2izN5e2-4mPJVj-WatbRU-24ZrVFk-2iMK6c4-UkS2KX-2i5FYZb-2hPnjz7-2iTSVVb -->
                        <img id = "garden5" src="images/classroom5.jpg" alt=""> <!-- https://www.flickr.com/photos/blaahhi/7865833452/in/photolist-cZ5sf9-Ky9Ku-QFQKMx-Z34hUt-KA4LWC-dCa4Qs-24gqVU8-SXZVh5-ZnWu7W-azRz7J-PsZFMy-ToqWZx-b4y2s6-dkEXWt-23vRWPD-25CRtPS-2fuXN5c-nsigSK-pyon39-21qG9fq-Fn3gXN-G3cHAG-21qGcZE-LFRVL1-23tjCsc-277xHze-F8E8rG-CgkKVK-23LxXWN-RYEBko-2ahyVSs-pDhcJt-L6rVBA-57Tfak-21qG8o5-25EgWVT-S2cBbS-33z8m-5vLKDk-4BXUR4-FEwCMK-24QGj2i-b99WDk-23f8dCZ-ZqqGBN-FksVAC-JxQdGz-bqyGPn-HLkxnF-PtEcfL -->
                        <img id = "garden6" src="images/classroom6.jpg" alt=""> <!-- https://www.flickr.com/photos/jollyandy/3655048949/in/photolist-6yZ5Hk-kAVwPh-4nygP-8cgJYM-asZgA-7tWo36-rvsA3G-CVttqY-6atzFQ-NeKV1-9oESB4-8omAC1-7Gn7UY-rvA5LF-7sLx4M-rMVJTw-rvA5sV-2hDyBMa-dLTew8-rtHQJX-rKKzhy-PtQase-PHcNFr-8kTTt3-oFTRzq-2iKnvAL-H8Hsu2-2ivYoDH-qR3tNE-FRLt8N-4q2Mxu-2hzLit6-r5EFuF-4q2MdL-8wKtTn-2iKBtV9-2e9pde2-CFBqfa-2iQ3433-2gc6v8X-2gSDEgd-dK8ZGf-7SdJRF-4q2Mwh-2iCEkwq-MHD3H-FJCgtJ-pCeg9q-CN7ewY-qeQmXU -->

                        <!-- images to for the spinning gallery no more than 150kb each -->

                    </div>
                    <div id="Base"></div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <!-- <script src="app.js"></script> -->
</body>
</html>
<?php
include_once('footer2.php');
?> 
