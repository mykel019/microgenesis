@extends('app')

@section('css')
@endsection

@section('content')
<div class="divider"></div>

<div class="container" style="padding: 60px;">
  <div class="row">
    <!-- <h2 class="margin">ACER</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
         <h2 class="text-center blue"><strong>Red Hat Server Hardening</strong></h2>
         <br>
         <h3 class="blue"><strong>Secure a Red Hat Enterprise Linux system to comply with security policy requirements</strong></h3>
         <br>
         <p>Red Hat® Server Hardening (RH413) builds on a student’s Red Hat Certified Engineer (RHCE®) certification or equivalent experience to provide an understanding of how to secure a Red Hat Enterprise Linux® system to comply with security policy requirements.</p>


         <h4 class="blue">Course Overview</h4>
         <p>Many security policies and standards require systems administrators to address specific user authentication concerns, application of updates, system auditing and logging, file system integrity, and more. Red Hat Server Hardening provides strategies for addressing specific policy and configuration concerns. This course can also help you prepare for the Red Hat Certificate of Expertise in Server Hardening exam (EX413).</p>
         <br>


         <h4 class="blue">Course content summary</h4>
         <ul>
           <li>Review errata and apply them to Red Hat Enterprise Linux</li>
           <li>Use special permissions and file system access control lists</li>
           <li>Manage users and password-aging policy requirements</li>
           <li>Install and configure Red Hat Identity Management tools</li>
           <li>Understand system auditing</li>
          
         </ul>

         <h4 class="blue">Audience and prerequisite</h4>
            <ul>
                <li>Needs technical guidance on how to enhance the security of Red Hat Enterprise Linux systems</li>
                <li>Responsible for implementing security policy requirements on Red Hat Enterprise Linux systems consistently and in a reproducible, scalable way</li>
                <li>Must be able to demonstrate that systems meet security policy requirements</li>
                <li>Maintains conitnued adherence to security requriements, including management of security-critical operating system/software updates</li>
                <li>RHCE-level skills highly recommended</li>
            </ul>


         <h4 class="blue">Prerequisites for this course</h4>
            <ul>
                <li>Red Hat Certified Engineer (RHCE) certification, Red Hat Certififed Systems Administrator (RHCSA) certification, or equivalent experience required</li>
                <li>For candidates who have not earned their RHCSA or RHCE certifications, confirmation of the required knowledge can be obtained by passing the online <a href="https://www.redhat.com/rhtapps/assessment/" class="blue">skills assessment</a></li>
            </ul>


         <h4 class="blue">Outline for this course</h4>

         <p><b>Track security updates</b></p>
         <p>Understand how Red Hat Enterprise Linux produces updates and how to use yum to perform queries to identify what errata are available.</p>
         <br>

         <p><b>Manage software updates</b></p>
         <p>Develop a process for applying updates to systems including verifying properties of the update..</p>
         <br>

         <p><b>Create file systems</b></p>
         <p>Allocate an advanced file system layout and use file system encryption.</p>
         <br>

         <p><b>Manage file systems</b></p>
         <p>Adjust file system properties through security related options and file system attributes.</p>
         <br>

         <p><b>Manage special permissions</b></p>
         <p>Work with set user ID (SUID), set group ID (SGID), and sticky (SVTX) permissions and locate files with these permissions enabled.</p>

         <p><b>Manage additional file access controls</b></p>
         <p>Modify default permissions applied to files and directories; work with file access control lists..</p>
         <br>

         <p><b>Monitor for file system changes</b></p>
         <p>Configure software to monitor the files on your machine for changes.</p>
         <br>

        <p><b>Manage user accounts</b></p>
         <p>Set password-aging properties for users, audit user accounts.</p>
         <br>

        <p><b>Manage pluggable authentication modules (PAMs)</b></p>
         <p>Apply changes to PAMs to enforce different types of rules on users..</p>
         <br>

        <p><b>Secure console access</b></p>
         <p>Adjust properties for various console services to enable or disable settings based on security</p>
         <br>

        <p><b>Install central authentication</b></p>
         <p>Install and configure a Red Hat Identity Management server and client..</p>
         <br>

        <p><b>Manage central authentication</b></p>
         <p>Configure Red Hat Identity Management rules to control both user access to client systems and additional privileges granted to users on those systems.</p>
         <br>


        <p><b>Configure system logging</b></p>
         <p>Configure remote logging to use transport layer encryption and manage additional logs generated by remote systems.</p>
         <br>

        <p><b>Configure system auditing</b></p>
         <p>Enable and configure system auditing.</p>
         <br>

         <p><b>Control access to network services</b></p>
         <p>Manage firewall rules to limit connectivity to network services</p>
         <br>

       

        </div>


    </div>

    <div>
      
    </div>
  </div>
</div>

@endsection