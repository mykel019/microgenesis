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
         <h2 class="text-center blue"><strong>RHCE Rapid Track Course (Course Only)</strong></h2>
         <br>
         <h3 class="blue"><strong>Prepare for the Red Hat Certified Engineer exam (EX300).</strong></h3>
         <br>
         <p>The RHCE® Certification lab (RH299) is designed for students seeking a hands-on, lab-based review prior to taking the Red Hat Certified Engineer (RHCE) exam. Students taking this course should have already completed their classroom training and simply be preparing to take or retake the exam.

 </p>
         <br>


         <h4 class="blue">Course Overview</h4>
         <p>During the 4-day course, students will work at their own pace through the complete set of labs from both the RHCSA (Red Hat Certified System Administrator) Rapid Track course (RH199) and Red Hat System Administration III (RH254). The RHCE Certification Lab course includes a few instructor lectures designed to review key technologies such as systemd, firewalld, and IPv6. For the classroom and virtual classroom versions of this course, an instructor will be available throughout the week to assist students as they work through the labs.</p>
         <br>
        

        <h4><strong>Course content summary</strong></h4>
        <ul>
            <li>Managing and troubleshooting system services during the booot process</li>
            <li>Network configuration and basic troubleshooting</li>
            <li>Managing local storage, creating and using file systems</li>
            <li>Firewall management with firewall</li>
            <li>Automating installation of Red Hat Enterprise Linux using kickstart</li>
            <li>Manage SELinux settings</li>
            <li>Using NFS and Samba shared filesystem</li>
            <li>iSCSI initiator  and target configuration</li>
            <li>Domain Name System (DNS) troubleshooting and caching name server</li>
            <li>Providing Network File System (NFS) and Server Message Block (SMB) file servers</li>
            <li>Apache HTTPD web sever management</li>
            <li>MariaDB SQL database configuration</li>
            <li>Postfix Simple Mail Transfer Protocol (SMTP) nullclient for servers</li>
            <li>Bash scripting for automation</li>
        </ul>


         <h4 class="blue">Audience and prerequisites</h4>
         <ul>
             <li>RHCE on Red Hat Enterprise Linux 6 earlier who wish to recertify in Red Hat Enterprise Linux 7</li>
             <li>Students who previously attempted the RHCE exam, did not pass and wish to retake the exam</li>
             <li>Students who have completed the RHCE track courses (Red Hat System Administration I, II and III or equivalent) and would like additional hands-on practice prior to taking the RHCE exam</li>
         </ul>
         <br>

         <h4 class="blue"><strong>Prerequisite for this course</strong></h4>
         <br>
         <p>to qualify for this course students must:</p>
         <ul>
             <li>Students should have already completed Red Hat System Administration I, II and III or equivalent training</li>
            <li>It is hihgly recommended students take our online <a href="https://www.redhat.com/rhtapps/assessment/" class="blue">skills assessment</a> prior to enrolling in this course</li>
            <li>Extensive UNIX administration experience by itself is not adequate for most students</li>
         </ul>
  


         <h4 class="blue">Outline for this course</h4>

         <p><b>Local and remote logins</b></p>
         <p>Review methods for accessing the system and engaging Red Hat Support</p>
         <br>

         <p><b>File system navigation</b></p>
         <p>Copy, move,  create, delete, link, and oranize files while working from Bash shell prompt</p>
         <br>

         <p><b>Users and group</b></p>
         <p>Manage Linux users and groups and administer local password policies</p>
         <br>

         <p><b>File permissions</b></p>
         <p>Control access to files and directories using permissins and access controls list (ACL).</p>
         <br>

         <p><b>SELinux permissions</b></p>
         <p>Manage the SELinux behavior of a system to keep it secure in case of a network service compromise</p>
         <br>

         <p><b>Process management</b></p>
         <p>Evaluate and control processess running on a Red Hat Enterprise Linux System</p>
         <br>

        <p><b>Updating software packages</b></p>
         <p>Download, install, update and manage software packages from Red Hat and yum package repositories</p>
         <br>

         <p><b>Creating and mounting file systems</b></p>
         <p>Create and amange disks, partitions and filesystems from the command line</p>

        <p><b>Service management and boot troubleshooting</b></p>
         <p>Control and monitor system daemons and troubleshooting the Red Hat Enterprise Linux boot process</p>
         <br>

        <p><b>Network configuration</b></p>
         <p>Configure basic IPv4 networking on Red Hat Enterprise Linux Systems</p>
         <br>

        <p><b>System logging and ntp</b></p>
         <p>Locate and accurately interpret relevant system log files for troubleshooting purposes</p>
         <br>

        <p><b>Logical volume management</b></p>
         <p>Create and manage logical volumes from the command line</p>
         <br>

        <p><b>Mounting network file systems</b></p>
         <p>Use auto fs and command line to mount and unmount network storage with NFS and SMB</p>
         <br>


        <p><b>Firewall configuration</b></p>
         <p>Configure and troubleshoot basic IPv6 networking on Red Hat Enterprise Linux Systems</p>
         <br>


        <p><b>Configuring link aggregation and bridging</b></p>
         <p>Configure and troubleshoot advanced network interface functionality including bonding, teaming and local software bridges</p>
         <br>

        <p><b>Controlling network port security</b></p>
         <p>Permit and reject access to network services using advanced SELinux and firewall filtering techniques.</p>
         <br>

         <p><b>Managing DNS for Servers</b></p>
         <p>Set and verify correct DNS records  for systems and configure secure-caching DNS</p>
         <br>

         <p><b>Configuring E-mail Delivery</b></p>
         <p>Relay all e-mail sent by the system to a SMTP gateway for central delivery</p>
         <br>

         <p><b>Providing block-based storage</b></p>
         <p>Provide and use networked iSCSI block devices as remote disks</p>
         <br>

         <p><b>Providing file-based storage</b></p>
         <p>Provide NFS exports and SMB file shares to specific systems and users</p>
         <br>

         <p><b>Configuring MariaDB databases</b></p>
         <p>Provide a MariaDB SQL databases for use by programs and database administrators</p>
         <br>


         <p><b>Providing Apache HTTPD Web Service</b></p>
         <p>Configure Apache HTTPD to provide Transport Layer Security (TLS) enabled websites and virtual hosts</p>
         <br>

         <p><b>Writing Bash scripts</b></p>
         <p>Write simple shell scripts using Bash</p>
         <br>

         <p><b>Bash conditionals and controls structures</b></p>
         <p>Use Bash startups and use environment variables, Bash aliases and Bash functions</p>
        </div>


    </div>

    <div>
      
    </div>
  </div>
</div>

@endsection