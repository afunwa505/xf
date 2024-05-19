<<<<<<< HEAD
<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </nav>
        <div class="nav2">
            <a href="login.php" class="link1"><div class="login">LOG IN</div></a>
            <a href="register.php" class="link2"><div class="register">SIGN UP</div></a>
        </div>
    </header>
<div class='termsCondition'>
        <br />
        <h1>Terms and Conditions</h1>
        <br />
        
        <?php  if (isset($_SESSION['username'])) : ?>
            <!-- <p><?php echo $_SESSION//['username']; ?></p> --> 
            <?php endif ?>
        <p>Welcome to X-File. These Terms and Conditions govern your use of our file upload and storage services. By accessing or using our website, you agree to comply with these terms. Please read them carefully before proceeding. </p>
        <br />
        <p>
        1. Acceptance of Terms:
        By using our website, you acknowledge that you have read, understood, and agreed to be bound by these Terms and Conditions, as well as our Privacy Policy. If you do not agree with any part of these terms, please do not access or use our services. </p>
        <br />
        <p>2. Use of Services:  <br />
            a. Eligibility: You must be of age certified by your country to use a computer device or to access the internet or have the legal capacity to enter into a contract to use our services. By using our website, you represent and warrant that you meet these requirements.</p>
            <br />
            <p>b. User Accounts: To access certain features of our website, you may need to create a user account. You are responsible for maintaining the confidentiality of your account information, including your username and password. You agree to be solely responsible for all activities that occur under your account. </p>
            <br />
            <p>c. Prohibited Activities: You agree not to use our services for any unlawful or unauthorized purposes, including but not limited to uploading or sharing files that infringe upon the intellectual property rights of others, contain viruses or malware, or promote hate speech or violence. You are solely responsible for the files you upload and share.</p>
            <br />
            <p>d. Storage Limitations: We may impose storage limitations on your account to ensure fair and efficient use of our services. We reserve the right to delete or remove files that exceed these limits or violate our terms.</p>
            <br />
            <p>1. Intellectual Property: <br />
            a. Ownership: We retain all ownership rights to our website, including its design, content, and underlying technology. You may not copy, modify, distribute, or reproduce any part of our website without our prior written consent.</p>
            <br />
            <p>
            b. User Content: By uploading files to our website, you grant us a non-exclusive, worldwide, royalty-free license to use, reproduce, modify, and distribute such content for the sole purpose of providing our services. You represent and warrant that you have the necessary rights to grant us this license.</p>
            <br />
            <p>1. Privacy: <br />
            We respect your privacy and handle your personal information in accordance with our Privacy Policy. By using our services, you consent to the collection, use, and disclosure of your information as described in our Privacy Policy</p>
            <br />
           <p>2. Disclaimer of Warranties: <br />
            a. Our services are provided on an "as is" and "as available" basis. We make no warranties or representations, express or implied, regarding the reliability, accuracy, or availability of our website</p>
            <br />
            <p>
            b. We do not guarantee the 100% security of your files, and you acknowledge and agree that you upload and share files at your own risk.</p>
            <br />
            <p>1. Limitation of Liability: <br />
            a. To the extent permitted by applicable laws, we shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in connection with the use or inability to use our services.</p>
            <br />
            <p>
            b. In no event shall our total liability exceed the amount you have paid, if any, for the use of our services in the past 12 months.</p>
            <br />
            <p>
            1. Indemnification: <br />
            You agree to indemnify and hold us harmless from any claims, losses, damages, liabilities, costs, and expenses (including attorney's fees) arising out of or in connection with your use of our services, your violation of these Terms and Conditions, or your infringement of any rights of a third party.</p>
            <br />
            <p>
            2. Modification of Terms: <br />
            We reserve the right to modify these Terms and Conditions at any time. Any changes will be effective upon posting on our website. It is your responsibility to review these terms periodically for updates. Continued use of our services after any modifications constitutes your acceptance of the revised terms.</p>
            <br />
            <p>
            3. Governing Law and Jurisdiction: <br />
            These Terms and Conditions shall be governed by and construed in accordance with the laws of Jurisdiction. Any disputes arising out of or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in Jurisdiction.</p>
            <br />
            <p>If you have any questions or concerns regarding these Terms and Conditions, please contact us.
            Last updated: <span id="span"></span></p>
            <br />
        </div>

        <script src="./js/intro.js"></script>
</body>
