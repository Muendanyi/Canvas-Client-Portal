<?php
  include 'inc/header.php'
?>

<style>
    .icon{
    width: 100px;
  }

  .powerBI-report{
    height: 50vh;
    width: 100%;
  }
</style>
<script type="text/javascript">
    function fullscreen() {
        // Get a reference to the embedded report HTML element
        var embedContainer = $('#reportContainer')[0];

        // Get a reference to the embedded report.
        report = powerbi.get(embedContainer);

        // Displays the report in full screen mode.
        report.fullscreen();
    }
</script>

<section onload="onload()" class="mx-lg-3" id="body">
  <div class="row mt-1 shadow-lg" id="Access Control">
    <div class="col-lg-4 col-md-4 col-sm-4 text-center d-none d-md-block">
    <div class="alignment px-3 shadow ">
      <img class="img-fluid rounded-3 pt-5 icon" src="Access-img123.png" alt="">
      <h3 class="py-1">Access Control</h3> 
      <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions. Secure your reports and Workspaces by getting to know who has accessed them.  </p>  
    </div> 
    
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="d-block d-md-none text-center"><h3 >Access Control</h3> </div> 
      <iframe title="Access Control - Activity Overview" class="powerBI-report" src="https://app.powerbi.com/reportEmbed?reportId=86b6d757-53c2-44db-ba30-30e48f503d0f&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" id="report" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row my-3 shadow-lg" id="Metric Usage">
    <div class="col-lg-4 col-md-4 col-sm-12 shadow px-3 text-center d-none d-md-block" >
      <img class="img-fluid rounded-3 pt-5 icon" src="Metrics-img.png" alt="">
      <h3 class="py-1" >Metric Usage</h3> 
      <p>Canvas Intelligence can now easily track critical performance metrics and incorporate these insights into their operations thanks to advances in technology. Metric usage provides information about the consumption of a specific workspace and reports.  </p>  
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="d-block d-md-none text-center"><h3 >Usage Metric </h3> </div> 
      <iframe title="Official Power BI Usage Metrics Report" class="powerBI-report" src="https://app.powerbi.com/reportEmbed?reportId=0be43bd1-c725-46a3-bd90-8a89114102cd&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9&allowFullScreen='true'" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row mt-1 shadow-lg" id="Fresh Desk">
    <div class="col-lg-4 col-md-4 col-sm-4 text-center d-none d-md-block">
    <div class="alignment px-3 shadow">
      <img class="img-fluid rounded-3 pt-5 icon" src="Freshdesk-img.png" alt="">
      <h3 class="py-1">Fresh Desk</h3> 
      <p>Freshdesk is a feature-rich and user-friendly cloud-based customer support software. Using "support ticket" to describe a customer's interaction with Canvas Intelligence.  </p>  
    </div> 
    
    </div>
    <div class="col-lg-8 col-md-8 col-sm-4">
      <div class="d-block d-md-none text-center alignment py-1"><h3 >Fresh Desk</h3> </div> 
      <iframe title="freshdesk report_adn" class="powerBI-report" src="https://app.powerbi.com/reportEmbed?reportId=97db4c70-3f5b-49d7-a315-7c5f069a5bd5&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row my-3 shadow-lg" id="Activity With Canvas">

  <div class="col-lg-4 col-md-4 col-sm-12 shadow px-3 text-center d-none d-md-block" >
      <img class="img-fluid rounded-3 pt-5 icon" src="Communication-img.png" alt="">
      <h3 class="py-1">Activity With Canvas</h3> 
      <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions. Secure your reports and Workspaces by getting to know who has accessed them.  </p>  
    </div>
    
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="d-block d-md-none text-center py-1"><h3 >Activity With Canvas</h3> </div> 
      <iframe title="FireFlies x Ms Metadata" class="powerBI-report" src="https://app.powerbi.com/reportEmbed?reportId=49b913b1-129b-4d72-8fe1-d03cf8534453&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>
</section>

<script>  
  function onload(){
    alert("We have implemented Role-Based Access Control (RBAC) for data security; to authenticate your access, please click the PowerBI Sign-In Button")}
</script>
<script src="/powerbi-client/dist/powerbi.js"></script>
</body>
</html>