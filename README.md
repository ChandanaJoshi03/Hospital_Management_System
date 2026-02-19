# Hospital_Management_System
A web-based application built with HTML to manage hospital operations including patient registration, appointment scheduling, and staff management.  Key Features: Patient and staff record management Appointment booking and tracking User-friendly and clean interface Technologies used: HTML/CSS, PHP, Js, jQuery, Bootstrap and SQL



![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Main%20Page.jpg)
![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Main%20page%202.jpg)
![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Main%20page%203.jpg)
![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Main%20page%204.jpg)

Above are the landing page of the Hospital Management System web application provides easy access to key sections such as Home, Services, About, Contact Us, and Login. It offers a simple and user-friendly interface to help users learn about the hospital, explore available services, and securely log in to access the system. Overall, it ensures smooth navigation and a better user experience.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/About%20Page.jpg)
The Above image is the About page of the Hospital Management System provides brief information about the purpose and importance of the application. It explains how the system helps in managing hospital activities efficiently, such as patient records, appointments. This page gives users a clear understanding of the website’s goal and functionality.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Service%20page.jpg)
![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/Service%20page%202.jpg)
The above are Services page of the Hospital Management System displays the medical services available in the hospital. It includes details about the services provided by doctors along with doctor information such as specialization and availability. This page helps patients easily explore and choose the required healthcare services.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/contact%20us%20page.jpg)
The above image is Contact Us page of the Hospital Management System allows users to get in touch with the hospital for any queries or support. It provides essential contact details such as phone number, email, and address, Map direction making communication easy and accessible.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/login%20page.jpg)
The above image is Login page of the Hospital Management System provides secure access for both administrators and patients. Users enter their credentials, which are verified with the database. If the credentials match an admin account, the system redirects to the admin panel, while patient credentials redirect to the patient dashboard. This ensures role-based access within a single login interface.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/admin%20page.jpg)
The above image is  Admin Dashboard of the Hospital Management System provides complete control over hospital activities. The admin can view the total number of appointments, including those accepted and rejected. It also displays employee details along with their work shifts, as well as patient information such as health records, tests, and test reports. Additionally, the admin can edit, manage, and download required details whenever needed.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/patient%20page.jpg)
The above image is  Patient Dashboard of the Hospital Management System allows patients to manage their personal and medical information easily. Patients can update their details, book appointments, and check whether their appointments are accepted or canceled by the doctor. It also provides access to health updates, test history, scheduled tests, and available test options. Additionally, patients can download their medical reports and prescriptions whenever required.

![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/reg%20page%201.jpg)
![](https://github.com/ChandanaJoshi03/Hospital_Management_System/blob/b6e53516c29f0c545c277ffdf022a7537ba28571/output/reg%20page%202.jpg)
The above image is Register page of the Hospital Management System allows new users to create an account by entering their basic personal details. After successful registration, patients can log in to the system and access features such as booking appointments, viewing health records, and downloading reports

# Prerequisites
Install Wampserver64 web server
Any Editor (Preferably Macromedia Dreamweaver MX 2004 )
Any web browser with latest version

## Languages and Technologies used
HTML5/CSS3
JavaScript  
Bootstrap (An HTML, CSS, and JS library)
Php
MySQL/MariaDB (An RDBMS that uses SQL) 

# Steps to Run the Project on Your Machine

1. Download and install WAMP Server on your system.
2. Clone or download the project repository.
3. Extract the project files and place the folder inside the www directory of WAMP.
4. Create a database connection file (e.g., dbconnect.php) to connect the project with your database and paste and set yours accordingly
5. <?php
$server = "localhost";
$user   = "set your user";
$pass   = "set your password or keep it empty";
$db     = "db name";   // database name

$conn = new mysqli($server, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
        
7. Open phpMyAdmin and create a new database .
8. .sql you need to create and create tables accordingly and Import the file(.sql is nothing but db)
9. Open your web browser and type:
10. localhost/foldername
11. The Hospital Management System project will now run successfully.
12. Hurray! That’s it! 🎉
13. create another folder for images also.


