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
         <h2 class="text-center blue"><strong>RHCSA Rapid Track Course (with RHCSA Exam)</strong></h2>
         <br>
         <h3 class="blue"><strong>Combines Red Hat System Administration I and II at a rapid pace</strong></h3>
         <br>
         <p>The RHCSA Rapid Track course (RH200) relates to Red Hat® Enterprise Linux® 7 and is designed for students who already have significant experience with Linux administration. The course reviews the tasks covered in Red Hat System Administration I (RH124) and II (RH134) at an accelerated pace..</p>


         <h4 class="blue">Course Overview</h4>
         <p>On completion of course materials, students should be prepared to take the Red Hat Certified System Administrator (RHCSA) exam. This version of the course includes the exam.</p>
         <br>
         <p>
            Note: This course builds on a student’s existing understanding of command-line based Linux system administration. Students should be able to execute common commands using the shell, work with common command options, and access man pages for help. Students lacking this knowledge are strongly encouraged to take Red Hat System Administration I (RH124) and II (RH134) instead.
         </p>


         <h4 class="blue">Course content summary</h4>
         <ul>
           <li>Managing users and groups, files, and file permissions</li>
           <li>Updating software packages with yum</li>
           <li>Managing and troubleshooting systemd services during the boot process</li>
           <li>Network configuration and basic troubleshooting</li>
           <li>Managing local storage and creating and using file systems</li>
           <li>Firewall management with firewall</li>
           <li>Managing kernel-based virtual machines (KVMs)</li>
           <li>Automating installation of Red Hat Enterprise Linux using Kickstart</li>
         </ul>

         <h4 class="blue">Audience for this course</h4>
            <p>Students for this class should have 1-3 years of full time Linux administration experience.</p>


         <h4 class="blue">Prerequisites for this course</h4>
         <p>Students attending this course should have basic experience with the following, with minimal dependence on documentation:

        Linux (some of the course may be review)</p>
        <ul>
            <li>Linux (some of the course may be review)</li>
            <li>The bash shell, including job control (&, fg, bg, jobs), shell expansion (command, tilde, globbing, brace, protection from expansion), I/O redirection, and pipes</li>
            <li>IPv4 networking addressing and routing concepts, TCP/UDP, and ports</li>
            <li>Navigation of the GNOME 3 interface</li>
            <li>Editing text files from the command line with vim or other available programs</li>
            <li>Finding information in man pages and info nodes</li>
            <li>The concept of file permissions</li>
            <li>Interactive installation of Red Hat Enterprise Linux</li>
            <li>Per-user ‘at’ and ‘cron’ jobs</li>
            <li>Use of archival utilities such as ‘tar’, ‘zip’, and compression utilities</li>
            <li>Absolute and relative paths
                <ul>
                    <li>Finding files with ‘find’ and ‘locate’</li>
                </ul>
            </li>
        </ul>
        <p>Confirmation of the correct skill-set knowledge can be obtained by passing the online skills assessment.</p>




         <h4 class="blue">Outline for this course</h4>

         <p><b>Access the command line</b></p>
         <p>Log in to a Linux system and run simple commands using shell</p>
         <br>

         <p><b>Manage files from the command line</b></p>
         <p>Work with files from the bash shell prompt.</p>
         <br>

         <p><b>Managing local Linux users and groups </b></p>
         <p>Manage Linux users and groups and administer local password policies.</p>
         <br>

         <p><b>Controlling access to files with Linux file system permissions </b></p>
         <p>Set access permissions on files and interpret the security effects of different permission settings..</p>
         <br>

         <p><b>Managing SELinux security</b></p>
         <p>Use SELinux to manage access to files and interpret and troubleshoot SELinux security effects</p>

         <p><b>Monitoring and managing Linux processes</b></p>
         <p>Monitor and control procesess running on the system</p>

         <p><b>Installing and updating software packages</b></p>
         <p>Download, install, update, and manage software packages from Red Hat and yum package repositories</p>
         <br>


         <p><b>Controlling services and daemons</b></p>
         <p>Control and monitor network services and system daemons using system</p>
         <br>


         <p><b>Managing Red Hat Enterprise Linux networking </b></p>
         <p>Configure basic IPv4 networking on Red Hat Enterprise Linux systems.</p>
         <br>


         <p><b>Analyze and storing logs</b></p>
         <p>Locate and accurately interpret relevant using log files for troubleshooting purposes.</p>



         <p><b>Managing storage and file systems </b></p>
         <p>Create and use disk partitions, logical volumes, file systems, and swap spaces.</p>
         <br>

         <p><b>Scheduling system tasks </b></p>
         <p>Schedule recurring system tasks using cron and systemd timer units.</p>
         <br>


         <p><b>Mounting network file systems </b></p>
         <p>Mount network file system (NFS) exports and server message block (SMB) shares from network file servers.</p>
         <br>

         <p><b>Limiting network communication with firewall</b></p>
         <p>Configure a basic local firewall.</p>
         <br>


         <p><b>Virtualization and kickstart</b></p>
         <p>Manage KVMs and install them with Red Hat Enterprise Linux using Kickstart.</p>
         <br>



        </div>


    </div>

    <div>
      
    </div>
  </div>
</div>

@endsection