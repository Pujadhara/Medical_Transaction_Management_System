<!-- <?php 
        include 'partials/_dbconnect.php';
        $sql = "SELECT * FROM teacher";
        $result = mysqli_query($conn,$sql);
        
        ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Card Management System</title>
    <link rel="stylesheet" type="text/css" href="index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
       
        .buttonForApply{
            margin:25px;
            padding:12px;
            border-radius:10px;
            background-color: lightgreen;
            text-decoration: none;
            border:1px solid black;

        }
        center{
            margin-top:45px;
            margin-bottom:25px;
        }

        center a:hover{ 
            border: 2px solid red;
        }
        .backgroundFooter{
            height:105px;
            width:90%;
            background-color: darkblue;
            margin-left:5%;
        }
        .rowForDesgin{
            display: inline-flex;

        }
        .welcome_img{
            width:98%;
        }
    </style>
</head>
<body>

<!-- Top Header -->
<div class="top-header">
    <div class="info">
      <span>EMERGENCY: +254 717 783 146</span>
      <span>WORK HOURS: 09:00 - 20:00 Everyday</span>
      <span>LOCATION: 0123 Some Place</span>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="navbar">
    <div class="logo">MED<span>IN</span></div>
    <ul class="nav-links">
      <li><a href="/Hackathon">Home</a></li>
      <li><a href="#about">About us</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#doctors">Doctors</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a class="appointment-btn" href="/Hackathon/login.php" style="margin-right: 320px; text-decoration:none;">LogIn</a>
    <a class="appointment-btn" href="/Hackathon/signUp.php" style=" text-decoration:none;">SignUP</a>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <p class="tagline">CARING FOR LIFE</p>
      <h1>Leading the Way in Medical Excellence</h1>
      <div class="buttons">
        <a href="#services">Our Services</a>
        <button class="blue-btn">Book an Appointment</button>
      </div>
    </div>
    <div class="hero-image">
      <img src="https://www.kindpng.com/picc/m/78-786207_doctor-png-transparent-png.png" alt="Doctor" />
    </div>
  </section>




<div class="container">
    <div class="rowForDesgin">
    </div>
</div>

<section id="home">
    WELCOME TO MEDIN
    <p style="font-size: 16px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero veritatis repudiandae, praesentium illo totam ad quaerat cum numquam magnam? Illum neque earum error saepe minus provident inventore odit possimus quo?
                Lorem niet sed, aptotam eos ullam?
                Dignissimos nulla ea et illo autem, enim non vel quis. Assumenda ullam sed alias cupiditate illo veniam molestiae. Tenetur nostrum distinctio repellat cum a vero non veniam quos quia obcaecati.
                Animi nesciunt eveniet, impedit deserunt possimus aliquam debitis earum veritatis ipsa quibusdam voluptates expedita repellat quaerat? Cumque dignissimos deserunt quod exercitationem, pariatur voluptatem magni odio nobis error a, natus in!
            </p>
  </section> 
  
  
  <section id="about">
    <h2>About Us</h2>
    <br><br>
    <p>Medin is committed to delivering high-quality healthcare and patient satisfaction. We provide reliable and compassionate medical services.

    <br>
    🏥 <b><u>Medin Hospital</u></b> – <b>Where Healing Meets Hope</b><br>
Tucked on the edge of a sprawling hillside, Medin Hospital isn’t just a medical institution—it’s a sanctuary. Known as “the place where the impossible becomes routine,” Medin is renowned for pioneering treatments, cutting-edge technology, and a philosophy that blends science with soul.

<br>
Founded in 1978 by visionary surgeon Dr. Aaryan Mehta, Medin started as a humble 12-bed clinic. Today, it's a 1000-bed super-specialty hospital, famous for:

  <br>
🌿 The Serenity Wing – A healing garden connected to recovery rooms, where patients recover to the sound of rustling bamboo and birdsong.

<br>
⚙️ NeuroSyn Lab – The first fully AI-integrated neurology research center in the country.

<br>
🧬 MedinVerse – A VR-based mental wellness platform used in therapy and PTSD treatment.

<br>
👶 Rainbow Nest – A pediatric ICU with a forest theme, where kids feel like they’re on an adventure rather than in recovery.

<br>
But what makes Medin truly special is its staff—a handpicked team of doctors, therapists, and nurses who believe that empathy is just as vital as expertise.

<br>
The hospital motto?
🩺 “More than medicine. It’s Medin.”
    </p>
  </section> 
  
  
  <section id="services">
    <h2>Our Services</h2>
    <br><br>
    <p>We offer general consultations, diagnostics, surgery, emergency care, and more, tailored to meet every patient’s needs.</p>
    <p>🩺<b>Services at Medin Hospital – Where Innovation Heals</b> <br><br>
At Medin, we don’t just treat illnesses—we transform lives. Our services are designed to care for the body, comfort the mind, and uplift the soul. Whether you're here for a quick check-up or complex surgery, Medin surrounds you with expertise, empathy, and excellence.
<br><br>
🧠 <B>1. NeuroCare+</B>
Our AI-assisted Neurology Department combines brain-mapping tech with real-time diagnostics, helping us treat conditions like epilepsy, stroke, Parkinson’s, and more with unmatched precision.
<br><br>
💓 <b>2. HeartSync Cardiology</b>
Medin’s cardiology wing is equipped with next-gen robotic surgical arms and real-time blood flow visualization, offering everything from ECG to minimally invasive heart transplants.
<br><br>
🌸 <b>3. Medin Maternity & Neonatal Nest</b>
From prenatal yoga to pain-free birthing suites and a NICU designed like a soft lullaby—our maternity services bring new life into the world, safely and gently.
<br><br>
💬<b>4. MindWell: Psychiatric & Emotional Health</b> 
Our psychiatrists, counselors, and digital therapists provide 24/7 mental health support—onsite and online. VR therapy sessions and soundscape meditation zones are available for stress, anxiety, and trauma care.
<br><br>
🦴 <b>5. OrthoFlex Advanced Mobility</b>
We restore movement with robotic knee replacements, custom 3D-printed prosthetics, and hydro-rehab pools. Our motto: “You were made to move.”
<br><br>
🧬 <b>5. Medin Precision Lab</b>
Our futuristic diagnostics lab delivers results 50% faster with nanobot-assisted blood analysis and AI error detection. You’ll know what’s going on before the symptoms even show.
<br><br>
🏠 <b>7. Medin@Home</b>
Can’t make it to us? We’ll come to you. Medin@Home offers teleconsultation, home sample collection, doorstep drug delivery, and virtual follow-ups—because your care shouldn't be bound by walls.
<br><br>
🕊️ <b>8. Holistic Healing Wing</b>
Ayurveda, acupuncture, aroma therapy, guided meditation, and music healing—all under one roof to support your emotional and spiritual recovery.
<br><br>
💡 At Medin, it’s not just about treatment—it’s about transformation.</p>
  </section>
  
  
  <section id="doctors">
    <h2>Meet Our Doctors</h2>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Dr Sarah">
      <h3>Sarah Doe</h3>
      <p>Cardiologist with 10+ years of experience in heart care and diagnostics.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Dr Christina">
      <h3>Christina Doe</h3>
      <p>Pediatrician caring for children's health with love and precision.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>
    <div class="doctor-card">
      <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Dr Leonard">
      <h3>Leonard Doe</h3>
      <p>Renowned Surgeon known for advanced surgical procedures and safety.</p>
    </div>


  </section>  <section id="news">
    <h2>Latest News</h2>
    <div class="news-container">
      <div class="news-card">
        <h4>New Cancer Wing Launched</h4>
        <p>Medin inaugurated a state-of-the-art oncology wing to expand cancer treatment services. Open to public from May 1.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quis sequi rerum officiis commodi? Laboriosam recusandae dolorem, a porro voluptatem perspiciatis cum, saepe aut sequi ipsum qui doloremque ducimus. Voluptatem.
        </p>
      </div>
      <div class="news-card">
        <h4>Free Health Camp This Sunday</h4>
        <p>Join our doctors for a free health check-up camp this Sunday at the main campus. Includes BMI, sugar test, and more.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit amet ratione eaque, repudiandae excepturi laborum nihil placeat, aspernatur recusandae maxime, exercitationem provident accusamus quam consequatur sit beatae ipsum autem.
        </p>
      </div>
      <div class="news-card">
        <h4>24/7 Emergency Services</h4>
        <p>We now operate emergency services round-the-clock with quick ambulance response and trauma care.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt mollitia cupiditate, commodi delectus asperiores fugit optio sit ut reiciendis pariatur fuga molestiae officiis autem sequi voluptas tempora quibusdam officia?
        </p>
      </div>
      <div class="news-container">
      <div class="news-card">
        <h4>New Cancer Wing Launched</h4>
        <p>Medin inaugurated a state-of-the-art oncology wing to expand cancer treatment services. Open to public from May 1.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quis sequi rerum officiis commodi? Laboriosam recusandae dolorem, a porro voluptatem perspiciatis cum, saepe aut sequi ipsum qui doloremque ducimus. Voluptatem.
        </p>
      </div>
      <div class="news-card">
        <h4>24/7 Emergency Services</h4>
        <p>We now operate emergency services round-the-clock with quick ambulance response and trauma care.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt mollitia cupiditate, commodi delectus asperiores fugit optio sit ut reiciendis pariatur fuga molestiae officiis autem sequi voluptas tempora quibusdam officia?
        </p>
      </div>
      <div class="news-card">
        <h4>New Cancer Wing Launched</h4>
        <p>Medin inaugurated a state-of-the-art oncology wing to expand cancer treatment services. Open to public from May 1.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum quis sequi rerum officiis commodi? Laboriosam recusandae dolorem, a porro voluptatem perspiciatis cum, saepe aut sequi ipsum qui doloremque ducimus. Voluptatem.
        </p>
      </div>
    </div>


    <div class="container">
    <div class="rowForDesgin">
    </div>
</div>


  </section>  <section id="contact">
    <h2>Contact Us</h2>
    <div class="foot" style="text-align: left;">
    <div class="conpara">
    <h2 style="padding-bottom:18px;">Contact Details</h2>
        <p>College  :  988786476</p>
        <p>Placement  : 946257698</p>
        <p>Principal  : 07033000777</p>
        <p>E-mail  : info@medin.com</p>
        <p>E-mail  : medin@gmail.com</p>
        <p>Address :Post office road , jamshedpur ,<br> NH-33, Jamshedpur,<br> Jharkhand,(INDIA)</p>
    </div>

    <div class="conpara1">
    <h2 style="padding-bottom:18px;">City Address</h2>
    <p>Hospital : 245127</p>
    <p>Phone : 0678 - 73678698</p>
    <p>Fax : 9679 - 389798</p>
    <p>Address : Medin,<br> Binda Apartment, Mills Area, <br>Behind Basant Cinema,<br> sakchi,<br> Jamshedpur-831001</p>
    </div>

    <div class="conpara2">
        <h2 style="padding-bottom:18px;">Explore</h2>
        <p>Approval Letters</p>
        <p>AICTE Recommended Books</p>
        <p>for Eng Programmers</p>
        <p>ARIIA 2022 Report</p>
        <p>Financial Statements</p>
        <p>Higher Education Policy</p>
        <P>HR Policy</P>
        <P>IQAC</P>
        <p>RVS Virtual Tour</p>
        <p>Mandatory Disclosure</p>
        <p>Non - Statutory committees</p>
        <p>Undertaking</p>
    </div>
</div>
<div class="foot1">
    <div class="conpara3">
        <h2 style="padding-bottom:18px;">Quick Links</h2>
        <p>AICTE-Feedback</p>
        <p>Apply for WES/Transcript & <br>Student verification</p>
        <p>Anti-Ragging</p>
        <p>Grievance Redressal Portal</p>
        <p>Internal Complaints and <br> Women Empowerment</p>
        <p>Committee</p>
        <p>Smartapp</p>
        <p>Downloads</p>
    </div>
    <div class="conpara4">
        <h2 style="padding-bottom:18px;">Academics</h2>
        <p>Academic Regulations</p>
        <p>Academic Calender</p>
        <p>Annual Report</p>
        <p>COE Corner</p>
        <p>Learning Augmented</p>
        <p>ERP</p>
    </div>
    <div class="conapar5">
    <h2 style="padding-bottom:18px;">Follow Us On</h2>
    <div>
    <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    </div>
</div>
</div>

  </section>





<div class="Footer" >
    <div style="padding: 15px; color:white;"><p>MedIn - &copy 2023 All Rights Reserved</p></div>
    <div style="padding: 15px; color:white;">About</div>
    <div style="padding: 15px; color:white;">Privacy Policy</div>
    <div style="padding: 15px; color:white;">Terms Of Use</div>
    <div style="padding: 15px; color:white;">Refund Policy</div>
</div>

</body>
</html>