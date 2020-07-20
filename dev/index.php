<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Void is a personal portfolio template for individuals availabe in themeforest.net" />
		<meta name="keywords" content="portfolio template, personal portfolio, CV template" />
		<meta name="robots" content="index, follow" />
		<title>Akanksha Pathak</title>
    
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/void-designer.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="media/fav.png"/>

    <script src="js/lib/typed.js" type="text/javascript"></script>
 <script>
               document.addEventListener('DOMContentLoaded', function() {
                   var typed = new Typed('.category',{
                 strings: [
      'product enthusiast',
      'a designer',
      'a creator',
      'a passionate',
      'and',
      'a self driven individual !!!!!'],

  typeSpeed: 30,
  backSpeed: 30,
  startDelay: 500,
  backDelay: 500,
  smartBackspace: true,
  loop: true,
  showCursor: false
 })});
           </script> 



<script>
function sendContact() 
{
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "contact_mail.php",
		data:'contact-name='+$("#contact-name").val()+'&contact-email='+$("#contact-email").val()+'&contact-phone='+$("#contact-phone").val()+'&form-message='+$(form-message).val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
		},
		error:function (){}
                    });
            }
}
function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#contact-name").val()) {
		$("#contact-name-info").html("(required)");
		$("#contact-name").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#contact-email").val()) {
		$("#contact-email-info").html("(required)");
		$("#contact-email").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#contact-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#contact-email-info").html("(invalid)");
		$("#contact-email").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#contact-phone").val()) {
		$("#contact-phone-info").html("(required)");
		$("#contact-phone").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#form-message").val()) {
		$("#form-message-info").html("(required)");
		$("#form-message").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}


</script>
	</head>
  
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  
    <!-- Preloader -->
    <div class="preloader">
      <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
    </div>
  
    <!-- Navigation
    ================================================= -->
    <header id="header" class="on-scroll">
      <nav class="navbar navbar-default navbar-fixed-top nav-center-aligned">
        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="menu-sign">Menu <img src="media/designer/menu.png" alt="" /></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a class="page-scroll" href="#intro"><!-- <span>01</span> -->Intro</a></li>
              <li><a class="page-scroll" href="#about"><!-- <span>02</span> -->About</a></li>
              <li><a class="page-scroll" href="#timeline"><!-- <span>07</span> -->Timeline</a></li>
                            <li><a class="page-scroll" href="#skills"><!-- <span>04</span> -->Skills</a></li>
              <li><a class="page-scroll" href="#Media"><!-- <span>04</span> -->Media Presence</a></li>
              <li><a class="page-scroll" href="#testimonials"><!-- <span>06</span> -->Testimonials</a></li>
              <li><a class="page-scroll" href="#services"><!-- <span>03</span> -->Experience</a></li>
              <li><a class="page-scroll" href="#folio"><!-- <span>05</span> -->Certificates</a></li>
              <li><a class="page-scroll" href="#footer"><!-- <span>08</span> -->Contact</a></li>
              
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    
    <!-- Intro Section
    ================================================= -->
    <section id="intro">
      <div class="overflow-h">
        <div class="container-fluid">
          <ul id="scene" class="scene border fill">
            <li class="layer expand-width" data-depth="0.15"><img src="media/designer/intro-layer-1.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.25"><img src="media/designer/intro-layer-2.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.00"><div class="yellow-box"></div></li>
            <li class="layer expand-width" data-depth="0.40"><img src="media/designer/intro-layer-3.png" alt="" class="img-responsive" /> </li>
            <li class="layer expand-width" data-depth="0.55"><img src="media/designer/intro-layer-4.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.65">
              <div class="my-info" data-parallax='{"y": 100}'>
                <h1 class="name">Akanksha Pathak</h1>
                <h3 class="category text-white">I am a Product Enthusiast,  <span class = "type"></span></h3>
                
              </div>
            </li>
            <li class="layer expand-width" data-depth="1.40"><img src="media/designer/intro-layer-5.png" alt="" class="img-responsive" /></li>
          </ul>
        </div>
      </div>
    </section>
    
   <!-- About Me
    ================================================= -->
    <section id="about">
    	<div class="container wrapper">
    		<div class="row">
    			<div class="col-md-5">
            <div class="photo-block">
            
              <!--Parallax-->
              <ul class="element-scroll-parallax hidden-sm hidden-xs">
                <li data-parallax='{"rotateZ": 600, "smoothness": 200}'><img src="media/designer/about-spots.png" alt="" /></li>
              </ul><!--Parallax end-->
              
            	<div class="photo">
                <!--  <img src="media/designer/gradient-circle.png" alt="" class="photo-frame" />           -->  
                <img src="media/designer/my-photo.jpg" alt="It's Me" class="my-photo img-circle" />
              </div>
            	<ul class="social-link list-inline">
                <li><a href="https://www.linkedin.com/in/akankshapathak1991/" target="blank"><img src="media/designer/social/linkedin.png" alt="" /></a></li>
                <li><a href="https://www.youtube.com/channel/UCzMIwQCvank9xCqHMoPA80A?view_as=subscriber" target="blank"><img src="media/designer/social/youtube.png" alt="" /></a></li>
                <li><a href="https://www.instagram.com/akankshainferrari/?hl=en" target="blank"><img src="media/designer/social/insta.png" alt="" /></a></li>
              </ul>
            </div>
          </div>
    			<div class="col-md-7">
            <div class="text-me">
              <div class="headline">
              	<h2>About <span class="yellow">Me</span></h2>
              </div>
              <p> As a product professional with over 5 years of experience working for fortune 500 companies, I have collaborated with cross-functional teams on product development from planning, requirement gathering, prioritization, estimation, development, testing, deployment, and product launch. 
                I am an inquisitive strategic thinker and a self-starter who has a passion for technology and an eye for detail.</p>
              <ul class="list-inline actions">
              	<li><a href = #footer ><button class="btn btn-primary"> Hire Me </button></a></li>
              	<li><a href = "Resume_AkankshaPathak.pdf" target="_blank" ><button class="btn btn-secondary">Download CV</button></a></li>
                <li><a href = "Cover Letter.pdf" target="_blank" ><button class="btn btn-primary"> Download Cover Letter </button></a></li>
              </ul>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <!-- Timline Section
    ================================================= -->
    <section id="timeline">
    	<div class="container wrapper">
        <div class="headline">
          <h2> <span class="yellow">My</span> Journey</h2>
        </div>
        <div class="timeline-contents">
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">August 2019 - May 2020</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                 <a href = "#Exp 2"><h4 style="color: #000000;text-decoration: underline;">Product Manager at Texas A&M University – MBA Department </h4> </a> 
                  <p>As a graduate assistant in the product management capacity, I managed Salesforce integrations and implemented new features to support the evolving needs of the MBA department. </br>
                    <!-- <p class="grey">
                      • Created the roadmap for MBA admission offerings in tune with the business requirements and target user segment </br>
                      • Devised the data collection and analysis strategy for $15M seed grant project to gain target users for a digital collaboration product </br>
                      • Led a 6-member team to diagnose customer issues by conducting virtual sessions with users to help analyze the potential and reception of the product and generating success metrics for stakeholder reporting </br>
                    </p> -->

                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">May 2019 - August 2019</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <a href = "#Exp 3"><h4 style="color: #000000;text-decoration: underline;">Product Management Intern at Boeing</h4></a>
                  <p>As a product management intern, I partnered with product managers to ensure that backlog prioritization reflects current product strategy, market needs, and overall company vision. </br>
                   <!-- <a href="https://tinyurl.com/yynf6ot3" target="_blank"><b>Product 1- Operator</b></a>
           <p> <a href="Akanksha - Unified Product Catalog - Roadshow 24Jul2019.pptx" target="_blank"><b>Product 2- Unified Product Catalog Intern roadshow PPT</b></a> </p>
                <p class="grey">
                    • Launched the beta version of an automated meetings product to be tested among teams and gathered user feedback, conducted root-cause analysis and identified bugs for feature improvements</br>
                    • Liaised with engineers to develop automated product metrics dashboard to measure KPIs; optimized quantitative and qualitative analysis to report product insights using Power BI </br>
                    • Researched multiple industries to catalog Boeing software products; creating a golden standard for aviation</br>
                  </p> -->
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">September 2018 - May 2019</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <a href = "#Exp 4"><h4 style="color: #000000;text-decoration: underline;">Product marketing Associate at Texas A&M University</h4></a>
                  <p>As a product marketing associate, my job was to enhance and promote the International Student Services'(ISS) portfolio by organizing events and executing the social media strategy. </br>
                   <!-- <p class="grey">
                      • Understanding the pros and cons of the portfolio and work with the development team to enhance its features, aligning it with the needs of international students</br>
                      • Enhancing ISS visibility on social media by managing all the back-end and front-end applications</br>
                      • Optimizing website user interface to make it look more appealing</p>
                   -->
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">August 2018 - May 2020</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <h4 >MS-MIS from Texas A&M University </h4>
                  <p>Completed my Masters in Management Information Systems from Mays Business School at Texas A&M University<p> 

                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">August 2017 - July 2018</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <a href = "#Exp 5"> <h4 style="color: #000000;text-decoration: underline;">Product Manager, eCommerce at Colgate-Palmolive </h4></a>
                  <p>As a Product Manager for eCommerce platform, I standardized User Experience measures and acted as a liaison between business users, sales, and R&D teams.</p>
                  <!--<p class="grey">
                    • Guide the definition, design, development, and release of new solutions/features and enhancements</br>
                    • Partner with technology and business leaders to ensure the Product Roadmap supports business objectives in tune with customer needs</br>
                    • Champion continuous process improvements within the Product, User Experience, and Engineering teams to drive greater efficiencies in the product delivery pipeline</br>
                    • Make efficient and informed decisions by leveraging data and user insights thus enabling the delivery of most relevant features and functionality</p>
                  -->
                  </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">August 2016 - August 2017</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <a href = "#Exp 6"><h4 style="color: #000000;text-decoration: underline;" >Product Marketing Strategy Consultant at Executive Briefing Centre, TCS</h4></a>
                  <p>As a Product Marketing Strategy Consultant, I Interacted with cross-functional teams to gain knowledge and implement best practices on my team.</p>
                  <!--<p class="grey">
                    • Pitched success stories to executives of multinational brands. This enabled the company to win projects worth millions of dollars. I have the ability to bring out the true value of products and ideas while maintaining realistic expectations</br>
                    • Worked with cross-functional teams on product development from planning, requirement gathering, prioritization, estimation, development, testing, deployment, and performance measurement for an end-user tax filing product</p>
                  -->
                  </div>
                </div>
              </div>
            </div>
          
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">December 2013 - August 2016</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <a href = "#Exp 7"><h4 style="color: #000000;text-decoration: underline;">System Engineer at Tata Consultancy Services </h4></a>
                  <p>As a system engineer and consultant, my focus has always been upholding quality and satisfaction while delivering the work on time. My gregarious nature has helped me build strong connections within my organization. 
                  </p> 
                 <!-- <p class="grey">
                    • Identified best product experiences for the users while assessing business risks using web design and analytics techniques resulting in 20% increased sales and scalability of online platforms</br>
                    • Presented product demos and elicited client feedback in order to ensure the quality of deliverable and improve business processes</br>
                    • Translated business needs into an executable plan of action by creating user stories and test plans using JIRA and Confluence</p>
                 -->
                  </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">July 2011 - October 2013</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <a href = "#Exp 8"><h4 style="color: #000000;text-decoration: underline;">Co-Founder at Xtreme Technologies (Startup) </h4></a>
                  <p>As a co-founder, liaised with the developer, content writers and the business stakeholders to define the Minimum Viable Product (MVP) for product delivery.</p>
                 <!--
                  <p><a href="http://headfoundationtrust.org/" target="_blank"><b>Work-HeadFoundationTrust</b></a></p>
                  <p class="grey">
                    •	Liaised with the developer, content writers and the business stakeholders to define the Minimum Viable Product (MVP) for product delivery
                    •	Launched the alpha public version within 15 days; resulting in 98.0 customer satisfaction index (CSI) </p>
                  -->
                  </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">July 2009 - July 2013</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <h4 >B.Tech from Uttar Pradesh Technical University </h4>
                  <p>Completed my Bachelors of Technology in Computer Science and Engineering from Sri RamSwaroop College of Engineering and Management, Uttar Pradesh Technical University.
                  </p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>

    
    <!-- Skills
    ================================================= -->
    <section id="skills">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-md-4 col-md-offset-1">
            <div class="photo-skills">
              <img src="media/designer/skills.png" alt="" class="img-responsive img-skills" />
            </div>
          </div>
        	<div class="col-md-6">
            <div class="headline">
              <h2><span class="yellow">Core</span> Skills</h2>
            </div>
            
			<div class="skillset">
            <div class="skillbar" data-percent="93%">
                <div class="title">Product Launch</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
            
              <div class="skillbar" data-percent="78%">
                <div class="title">Backlog Prioritization</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="91%">
                <div class="title">Client Relationship</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="68%">
                <div class="title">Requirement Analysis</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              
              <div class="skillbar" data-percent="63%">
                <div class="title">Cloud Technology</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="95%">
                <div class="title">Process Optimization</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

          <div class="container wrapper">
            <div class="row">
          <div class="col-md-6">
            <div class="headline">
              <h2>Tools and Technology<span class="yellow" > Skills  </span> </h2>
            </div>
            

            <table style="width:100%">
              
           

              <tr>
                <td><img src="/media/designer/sap.png" alt="SAP" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/Salesforce.png" alt="Salesforce" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/JIRA.png" alt="JIRA" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/SQL.png" alt="SQL" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/amazon web services.png" alt="amazon web services" style="width:75px;height:75px;"></td>
              </tr>
              <tr>
                <td> <img src="/media/designer/Microsoft SharePoint.png" alt="Microsoft SharePoint style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/confluence.png" alt="confluence" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/github.png" alt="github" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/Sketch.png" alt="Sketch" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/Postman.png" alt="Postman" style="width:75px;height:75px;"></td>
                
              </tr>
              <tr>
                <td><img src="/media/designer/HTML5.png" alt="html" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/css.png" alt="css3" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/Javascript.png" alt="Javascript" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/Microsoft Office.png" alt="Microsoft Office" style="width:75px;height:75px;"></td>
                <td><img src="/media/designer/tableau.png" alt="tableau" style="width:75px;height:75px;"></td>
              </tr>
            </table>
            
            </div>

            <div class="col-md-4 col-md-offset-1">
              <div class="photo-skills">
                <img src="media/designer/skills 2.jpg" alt="" class="img-responsive img-skills"  />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Media
    ================================================= -->
    <section id= "Media">
    	<div class="container wrapper"> 
        <div class="row">
          
            <div class="headline">
              <h2> Media <span class="yellow">Presence</span></h2>
            </div>
             
<div id="Media">
            <table id="t01">
              
              
              <tr>
                <td><a href="https://open.spotify.com/show/7KYWblZSh3A1rv9vPKk5mF" target="_blank">
                  <img src="/media/designer/spotify.png" alt="Product Management Podcast" style="width:150px;height:150px;">
                </a></td>

                <td><a href="https://www.youtube.com/channel/UCzMIwQCvank9xCqHMoPA80A?view_as=subscriber" target="_blank">
                  <img src="https://img.icons8.com/color/150/000000/youtube-play.png"/>
                  <img src="/media/designer/youtube.png" alt="Product Management Youtube Channel" style="width:150px;height:150px;">
                </a></td>

                <td><a href="https://open.spotify.com/show/7KYWblZSh3A1rv9vPKk5mF" target="_blank">
                  <img src="/media/designer/medium.png" alt="Product Management Blog" style="width:150px;height:150px;">
                </a></td>

                <td><a href="https://github.com/pathakakanksha991" target="_blank">
                  <img src="/media/designer/github.png" alt="Product Management Projects" style="width:150px;height:150px;">
                </a></td>
                <td><a href="https://www.linkedin.com/in/akankshapathak1991/" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width=150px height=150px
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0e76a8"><path d="M141.04,13.76h-110.08c-9.4944,0 -17.2,7.7056 -17.2,17.2v110.08c0,9.4944 7.7056,17.2 17.2,17.2h110.08c9.4944,0 17.2,-7.7056 17.2,-17.2v-110.08c0,-9.4944 -7.7056,-17.2 -17.2,-17.2zM58.48,68.8v65.36h-20.64v-65.36zM37.84,49.7768c0,-4.816 4.128,-8.4968 10.32,-8.4968c6.192,0 10.0792,3.6808 10.32,8.4968c0,4.816 -3.8528,8.7032 -10.32,8.7032c-6.192,0 -10.32,-3.8872 -10.32,-8.7032zM134.16,134.16h-20.64c0,0 0,-31.8544 0,-34.4c0,-6.88 -3.44,-13.76 -12.04,-13.8976h-0.2752c-8.3248,0 -11.7648,7.0864 -11.7648,13.8976c0,3.1304 0,34.4 0,34.4h-20.64v-65.36h20.64v8.8064c0,0 6.6392,-8.8064 19.9864,-8.8064c13.6568,0 24.7336,9.3912 24.7336,28.4144z"></path></g></g></svg>
                  <img src="/media/designer/linkedin.png" alt="linkedin profile" style="width:150px;height:150px;">
                </a></td>
                
              </tr>
              
              <tr>
                <td ><a href="https://open.spotify.com/show/7KYWblZSh3A1rv9vPKk5mF" > <p style="color: #000000;"> My Podcast</p></a></td>
                <td><a href="https://www.youtube.com/channel/UCzMIwQCvank9xCqHMoPA80A?view_as=subscriber"><p style="color: #000000;"> My Youtube Channel</p></a></td>
                <td><a href="https://open.spotify.com/show/7KYWblZSh3A1rv9vPKk5mF"><p style="color: #000000;"> My Blog</p></a></td>
                <td><a href="https://github.com/pathakakanksha991"><p style="color: #000000;"> My GitHub Profile</p></a></td>
                <td><a href="https://www.linkedin.com/in/akankshapathak1991/"><p style="color: #000000;"> My LinkedIn Profile</p></a></td>
                
                
              </tr>
            </table>
          </div>
            

            
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- Testimonials Section
    ================================================= -->
    <section id="testimonials">
    
      <!--Section Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"y": 200}'><img src="media/designer/testimonial-1.png" alt="" /></li>
        <li data-parallax='{"y": -400, "rotateY": 300}'><img src="media/designer/testimonial-2.png" alt="" /></li>
        <li data-parallax='{"y": 400, "rotateZ": 300}'><img src="media/designer/testimonial-3.png" alt="" /></li>
        <li data-parallax='{"y": -500}'><img src="media/designer/testimonail-4.png" alt="" /></li>
      </ul><!--Parallax End-->
      
      <div class="container wrapper white-bg">
        <div class="headline">
          <h2>Recommendations</h2>
        </div>
        
        <!--Testimonial Carousel-->
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <div class="testimonial-client">
                <div class="client-photo">
                  <img src="media/designer/manager 1.png" alt="client" class="img-circle" />
                  <span class="quote"><i class="icon ion-quote"></i></span>
                </div>
                <h3>Aakash Jain</h3>
                <p class="text-muted">Product Manager at <span class="orange">UnitedHealth Group</span></p>
              </div>
              <blockquote>Working with Akanksha was absolutely fantastic. A naturally curious mind, she was quickly able to ask the right questions to get a cross-functional understanding of the systems rivaled by very few at the company. She needs very little direction and self sufficient in finding ways to break down high level problems into their lower level components.

                Regardless of which industry he ends up in, his natural talent and his desire to do great work makes him an excellent member on any team and I guarantee he will be successful in the future. </blockquote>
            </div>
            <div class="item">
              <div class="testimonial-client">
                <div class="client-photo">
                  <img src="media/designer/manager 2.png" alt="client" class="img-circle" />
                  <span class="quote"><i class="icon ion-quote"></i></span>
                </div>
                <h3>Tim Johnson</h3>
                <p class="text-muted">Senior Project Manager at <span class="orange">Boeing</span></p>
              </div>
              <blockquote>Akanksha displays a tenacity to learn, adapt to changing requirements, and resolve ever-changing problems. She shows the ability to astutely maneuver in a complex corporate environment. By taking on data, web, and software challenges, Akanksha showed terrific growth during her internship. She will be a leader wherever her career takes her!</blockquote>
            </div>
            <div class="item">
              <div class="testimonial-client">
                <div class="client-photo">
                  <img src="media/designer/manaer 3.png" alt="client" class="img-circle" />
                  <span class="quote"><i class="icon ion-quote"></i></span>
                </div>
                <h3>Matt Ardrey</h3>
                <p class="text-muted">Product Manager at <span class="orange">Boeing</span></p>
              </div>
              <blockquote>Akanksha will be a great asset for any organization. During her summer internship with Boeing Global Services, I had the opportunity to work with her. She showed a high level of intelligence, motivation and aptitude to make a great product leader.</blockquote>
            </div>
          </div>
          
          <!--Carousel Indicator-->
          <ol class="carousel-indicators carousel-indicators-set">
            <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-testimonials" data-slide-to="1"></li>
            <li data-target="#carousel-testimonials" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    
    <!-- Services
    ================================================= -->
    <section id="services">
      
      <!--Services Background-->
      <div class="service-background hidden-sm hidden-xs">
        <div class="violate"></div>
        <div class="dark"></div>
      </div><!--Background ends-->
      
      <!--Section Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"x": -150, "y": 500, "perspective": 500}'><img src="media/designer/service-1.png" alt="" /></li>
        <li data-parallax='{"y": -300, "rotateY": 300}'><img src="media/designer/service-2.png" alt="" /></li>
        <li><img src="media/designer/texts.png" alt="" /></li>
        <li data-parallax='{"y": 200}'><img src="media/designer/circle-fill.png" alt="" /></li>
      </ul><!--Parallax end-->
      
      <div class="container wrapper">
        <div class="row">
          <div class="service-contents">
            <div class="col-md-4">
              <div class="headline">
                <h2 class="white">Projects & Experience</h2>
              </div>
              <p class="white"> Product is my passion and experiments give me sugar rush - be it for a big corporation or in an entrepreneurial setup. I feel this is exactly what I was born for!</p>
            </div>
            <div class="col-md-6 col-md-offset-2">
              <div class="service-item">
                

              	<span class="service-icon"><img src="media/designer/Proj (1).png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span>-->
              	<div class="item-info">
              		<h3 class="white"> Project - Wedlock</h3>
              		<p class="grey">
                    <a href ="http://wedlock.herokuapp.com/" target="blank"> See Project</a> </br>
                    End to End Application Development - Wedlock, is a full-stack web application to provide wedding services to the user. It focuses on the concept of emotional web design, responsive web design, and mobile-first design.
                  </p>
              	</div>
              </div>

              <div class="service-item">
               <!-- <img src="media/designer/Proj (2).png">-->

              	<span class="service-icon"><img src="media/designer/Proj (2).png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span>-->
              	<div class="item-info">
                  <h3 class="white"> Project - 5G (Fifth Generation technology in Automotive Industry)</h3>
              		<p class="grey">
                    <a href ="https://www.slideshare.net/AkankshaPathak27/5-g-in-automotive-industry" target="blank"> See Project</a> </br>
                    How can the upcoming technologies change the face of future automotive: How can the upcoming technologies change the face of the future automotive. I analyzed the fifth-generation technology of mobile communication.
                  </p>
              	</div>
              </div>

              <div class="service-item">
                <!--<img src="media/designer/Proj (3).png">-->

              	<span class="service-icon"><img src="media/designer/Proj (3).png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
                  <h3 class="white"> Project - Yelp Dataset Analysis</h3>
              		<p class="grey">
                    <a href ="https://github.com/pathakakanksha991/Project-Advanced-Database---Analyzed-Yelp-dataset" target="blank"> See Project</a> </br>
                    The aim was to build a system that remains DB agnostic except for the data layer and work effectively for both relational and non-relational database cluster. It uses Spring-boot along with MariaDB Cluster for phase 1 and MongoDB is used in place of a relational database for phase 2 of the project.
                  </p>
              	</div>
              </div>

              <div class="service-item">
                <!--<img src="media/designer/Proj (4).png">-->

              	<span class="service-icon"><img src="media/designer/Proj (4).png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
                  <h3 class="white"> Project - Portable Housing</h3>
              		<p class="grey">
                    <a href ="https://www.slideshare.net/AkankshaPathak27/portable-housing-tech-commercialization" target="blank"> See Project</a> </br>
                    This project involved the feasibility of the commercialization of portable housing technology. This was a cost-effective option for homeless people - Cocoon Rover Portable Housing. Whether this technology should be commercialized or not?
                  </p>
              	</div>
              </div>

              <div class="service-item">
                <!--<img src="media/designer/Proj (5).png">-->

              	<span class="service-icon"><img src="media/designer/Proj (5).png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
                  <h3 class="white"> Project - Application for Home Chefs </h3>
              		<p class="grey">
                    <a href ="https://foodxoticcca.wixsite.com/mysite" target="blank"> See Project</a> </br>
                    Foundation of Entrepreneurship: Our team will provide a platform for customers inspiring to one day become professional chefs to connect to consumers. They get to decide what they want to cook when they want to cook while building their customer base. Customers looking at authentic foods not readily available in their area will be able to connect with chefs and order their food through our app. Link: 1.
                    PPT: <a href =" https://www.slideshare.net/AkankshaPathak27/homechef-application"></a>
                    Feasibility Study: <a href ="https://www.skillsire.com/read-blog/137_foodxotic-a-application-for-home-chefs-in-austin-texas-feasibility-study-of-the.html"></a>
                  </p>
              	</div>
              </div>
              
        
              <div class="service-item" id="Exp 2">
                <!--<img src="media/designer/1 exp.png">-->

              	<span class="service-icon"><img src="media/designer/1 exp.png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
              		<h3 class="white">TAMU MBA- Graduate Assistant – Product Manager</h3>
              		<p class="grey">
                    • Created the roadmap for MBA admission offerings in tune with the business requirements and target user segment </br>
                    • Devised the data collection and analysis strategy for $15M seed grant project to gain target users for a digital collaboration product </br>
                    • Led a 6-member team to diagnose customer issues by conducting virtual sessions with users to help analyze the potential and reception of the product and generating success metrics for stakeholder reporting </br>
                  </p>
              	</div>
              </div>
			  
              <div class="service-item" id="Exp 3">
                <!--<img src="media/designer/2 exp.png">-->
                <span class="service-icon"><img src="media/designer/2 exp.png" width="50px" height="50px"/></span>
                <!-- <span class="service-icon"><i class="icon ion-ios-lightbulb-outline"></i></span> -->
                
              	<div class="item-info">
              		<h3 class="white">Boeing - Product Management Intern</h3>
              		
                    <a href="https://tinyurl.com/yynf6ot3" target="_blank"><b>Product 1- Operator</b></a>
           <p> <a href="Akanksha - Unified Product Catalog - Roadshow 24Jul2019.pptx" target="_blank"><b>Product 2- Unified Product Catalog </b></a> </p></br>
                <p class="grey">
                    • Launched the beta version of an automated meetings product to be tested among teams and gathered user feedback, conducted root-cause analysis and identified bugs for feature improvements</br>
                    • Liaised with engineers to develop automated product metrics dashboard to measure KPIs; optimized quantitative and qualitative analysis to report product insights using Power BI </br>
                    • Researched multiple industries to catalog Boeing software products; creating a golden standard for aviation</br>
                  </p>
              	</div>
              </div>
              <div class="service-item" id="Exp 4">
               <!--<span><img src="media/designer/3 exp.png"></span> -->

              	<!--<span class="service-icon"><i class="icon ion-ios-camera-outline"></i></span> -->
              	<span class="service-icon"><img src="media/designer/3 exp.png" width="50px" height="50px"/>></span>
              	<div class="item-info">
              		<h3 class="white">TAMU ISS - Product Marketing Associate</h3>
              		<p class="grey">
                    • Understanding the pros and cons of the portfolio and work with the development team to enhance its features, aligning it with the needs of international students</br>
                    • Enhancing ISS visibility on social media by managing all the back-end and front-end applications</br>
                    • Optimizing website user interface to make it look more appealing</p>
              	</div>
              </div>
			  
              <div class="service-item" id="Exp 5">
                <!--<img src="media/designer/4 exp.png">-->
              	<span class="service-icon"><img src="media/designer/4 exp.png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
              		<h3 class="white">Colgate Palmolive – Product Manager (eCommerce)</h3>
              		<p class="grey">
                    • Guide the definition, design, development, and release of new solutions/features and enhancements</br>
                    • Partner with technology and business leaders to ensure the Product Roadmap supports business objectives in tune with customer needs</br>
                    • Champion continuous process improvements within the Product, User Experience, and Engineering teams to drive greater efficiencies in the product delivery pipeline</br>
                    • Make efficient and informed decisions by leveraging data and user insights thus enabling the delivery of most relevant features and functionality</p>
              	</div>
              </div>
			  
              <div class="service-item" id="Exp 6">
                <!--<img src="media/designer/5 exp.png">-->
              	<span class="service-icon"><img src="media/designer/5 exp.png" width="50px" height="50px"/></span>
              	<!-- <span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
              		<h3 class="white">TCS EBC – Product Marketing Strategy Consultant</h3>
              		<p class="grey">
                    • Pitched success stories to executives of multinational brands. This enabled the company to win projects worth millions of dollars. I have the ability to bring out the true value of products and ideas while maintaining realistic expectations</br>
                    • Worked with cross-functional teams on product development from planning, requirement gathering, prioritization, estimation, development, testing, deployment, and performance measurement for an end-user tax filing product</p>
              	</div>
              </div>
			  
              <div class="service-item" id="Exp 7">
                <!--<img src="media/designer/6 exp.png">-->
              	<span class="service-icon"><img src="media/designer/6 exp.png" width="50px" height="50px"/></span>
              	<!-- <span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
              		<h3 class="white">TCS – System Engineer</h3>
              		<p class="grey">
                    • Identified best product experiences for the users while assessing business risks using web design and analytics techniques resulting in 20% increased sales and scalability of online platforms</br>
                    • Presented product demos and elicited client feedback in order to ensure the quality of deliverable and improve business processes</br>
                    • Translated business needs into an executable plan of action by creating user stories and test plans using JIRA and Confluence</p>
              	</div>
              </div>
              <div class="service-item" id="Exp 8">
                <!--<img src="media/designer/7 exp.png">-->
              	<span class="service-icon"><img src="media/designer/7 exp.png" width="50px" height="50px"/></span>
              	<!--<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span> -->
              	<div class="item-info">
              		<h3 class="white">Xtreme Technologies (Startup) – Co-Founder (Design and Product Marketing Head)</h3>
                  <p><a href="http://headfoundationtrust.org/" target="_blank"><b>Work-HeadFoundationTrust</b></a></p></br>
                 
                  <p class="grey">
                    •	Liaised with the developer, content writers and the business stakeholders to define the Minimum Viable Product (MVP) for product delivery
                    •	Launched the alpha public version within 15 days; resulting in 98.0 customer satisfaction index (CSI) </p>
              	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section
    ================================================= -->
    <section id="folio">
    	<div class="container wrapper">
        <div class="headline">
          <h2><span class="yellow">My</span> Certificates</h2>
        </div>
        
        <!--Portfolio Menu-->
        <ul class="folio-menu list-inline">
          <li class=" fil-cat" data-rel="all">All</li>
          <li class=" fil-cat" data-rel="tech">Technology</li>
          <li class=" fil-cat" data-rel="ec">Extra-curricular</li>
          <li class=" fil-cat" data-rel="acad">Academics</li>
        </ul> 
        
        <!--Portfolio Thumbnails-->
        <div id="portfolio">
         
          <?php
          $dir1 = "./media/designer/portfolio/Academics/";
          $dir2 = "./media/designer/portfolio/Extra-curricular/";
          $dir3 = "./media/designer/portfolio/Technology/";
          $academics = scandir($dir1);
          $Extracurricular = scandir($dir2);
          $Technology = scandir($dir3);

          for ($x = 2; $x < count($academics); $x++) {
            echo "<div class=\"tile scale-anm acad all\">
              <img src=\"$dir1$academics[$x]\" alt=\"\" data-toggle=\"modal\" data-target=\".acad-$x\" />
            </div>";

          }

          for ($x = 2; $x < count($Extracurricular); $x++) {
            echo "<div class=\"tile scale-anm ec all\">
              <img src=\"$dir2$Extracurricular[$x]\" alt=\"\" data-toggle=\"modal\" data-target=\".ec-$x\" />
            </div>";

          }

          for ($x = 2; $x < count($Technology); $x++) {
            echo "<div class=\"tile scale-anm tech all\">
              <img src=\"$dir3$Technology[$x]\" alt=\"\" data-toggle=\"modal\" data-target=\".tech-$x\" />
            </div>";

          }

          ?>
<!--
          <div class="tile scale-anm web all">
            <img src="media/designer/portfolio/Academics/1.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm web all">
            <img src="media/designer/portfolio/Academics/Aca (1).jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm flyers all">
            <img src="media/designer/portfolio/Academics/Aca (10).jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm web all">
            <img src="media/designer/portfolio/4.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/5.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm web flyers all">
            <img src="media/designer/portfolio/6.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm flyers all">
            <img src="media/designer/portfolio/7.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/8.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/9.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/10.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/11.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/12.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="media/designer/portfolio/13.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
           -->
        </div>
        
        
        <!--Portfolio Modals-->

        <?php
        $dir1 = "./media/designer/portfolio/Academics/";
        $dir2 = "./media/designer/portfolio/Extra-curricular/";
        $dir3 = "./media/designer/portfolio/Technology/";
        $academics = scandir($dir1);
        $Extracurricular = scandir($dir2);
        $Technology = scandir($dir3);

        for ($x = 2; $x < count($academics); $x++) {
          echo " 

          <div class=\"modal fade acad-$x\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
              <div class=\"modal-content\">
                <img src=\"$dir1$academics[$x]\" alt=\"\" class=\"img-responsive\" />
              </div>
            </div>
          </div>
		  ";
         
        }

        for ($x = 2; $x < count($Extracurricular); $x++) {
          echo "
          
          <div class=\"modal fade ec-$x\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
              <div class=\"modal-content\">
                <img src=\"$dir2$Extracurricular[$x]\" alt=\"\" class=\"img-responsive\" />
              </div>
            </div>
          </div> ";

        }

        for ($x = 2; $x < count($Technology); $x++) {
          echo "

          <div class=\"modal fade tech-$x\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
              <div class=\"modal-content\">
                <img src=\"$dir3$Technology[$x]\" alt=\"\" class=\"img-responsive\" />
              </div>
            </div>
          </div> ";

        }

        ?>

        <!--
        <div class="modal fade project-1" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/1.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-2" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/2.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-3" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/3.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-4" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/4.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-5" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/5.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-6" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/6.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-7" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/7.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-8" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/8.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/9.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div><div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/10.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/11.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/12.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="media/designer/portfolio/13.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>-->
        
        <!--Portfolio Modals End-->
        

      </div>
    </section>
    
    <!-- Footer
    ================================================= -->
    <footer id="footer">
    
      <!--Footer Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"y": 400, "rotateY": 300, "rotateZ": -400}'><img src="media/designer/footer-l-1.png" alt="" /></li>
        <li data-parallax='{"y": -600, "rotateZ": -300}'><img src="media/designer/footer-l-2.png" alt="" /></li>
        <li data-parallax='{"x": 700}'><img src="media/designer/footer-l-3.png" alt="" /></li>
      </ul><!--Parallax End-->
      
    	<div class="container wrapper">
    		<div class="row">
    			<div class="col-md-7">
            <div class="headline">
              <h2 class="white">Contact <span class="yellow">Me</span></h2>
            </div>
            
            <!--Contact Form-->
            <form class="contact-form">
              <div class="form-group">
              <div id="mail-status"></div>
              <span id="contact-name-info" class="info"></span><br/>
                <input id="contact-name" type="text" name="contact-name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
              </div>
              <div class="form-group">
              <span id="contact-email-info" class="info"></span><br/>
                <input id="contact-email" type="text" name="contact-email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
              </div>
              <div class="form-group">
              <span id="contact-phone-info" class="info"></span><br/>
                <input id="contact-phone" type="text" name="contact-phone" class="form-control" placeholder="Enter your phone *" required="required" data-error="Phone is required.">
              </div>
              <div class="form-group">
              <span id="form-message-info" class="info"></span><br/>
                <textarea id="form-message" name="form-message" class="form-control" placeholder="Leave a message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              </div>
            </form>
             <button class="btn btn-secondary" onClick="sendContact();">Send message</button>
             
          </div>
    			<div class="col-md-5">
          
            <!--Contact Information-->
            <div class="contact-info">
              <div class="contact-detail">
                <!--<div class="reach">
                	<h4 class="white">CALL ME</h4>
                	<p>+1(979)739-XXXX</p>
                </div> -->
                <div class="reach">
                	<h4 class="white">EMAIL ME</h4>
                  <p>akankshapathak@tamu.edu</p>
                  <p>pathakakanksha991@gmail.com</p>
                </div>
                <div class="reach">
                	<h4 class="white">ADDRESS</h4>
                	<p>Austin, TX, United States</p>
                </div>
              </div>
              <ul class="list-inline social-icons">
              	<li><a href="https://www.facebook.com/akanksha.pathak.54/" target="blank"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="https://www.linkedin.com/in/akankshapathak1991/" target="blank"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
    		</div>
    	</div>
    </footer>
    
    
    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/parallax.hover.js"></script>
    <script src="js/plugins/jquery.parallax-scroll.js"></script>
    <script src="js/plugins/jquery.appear.js"></script>
    <script src="js/plugins/jquery.easing.min.js"></script>
    <script src="js/plugins/scrolling-nav.js"></script>
    <script src="js/void.js"></script>
    
  </body>

</html>