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
         <h2 class="text-center blue"><strong>Red Hat Enterprise Linux System Administration II</strong></h2>
         <br>
         <h3 class="blue"><strong>Part 2 of the core system administration tasks needs for Red Hat Enterprise Linux</strong></h3>
         <br>
         <p>This course is specifically designed for students who have completed Red Hat® System Administration I (RH124). Red Hat System Administration II (RH134) focuses on the key tasks needed to become a full time Linux® administrator.

 </p>


         <h4 class="blue">Course Overview</h4>
         <p>This course goes deeper into enterprise Linux administration including file systems and partitioning, logical volumes, SELinux, firewalling, and troubleshooting. Attending both Red Hat System Administration I and Red Hat System Administration II can help you in your preparation for the Red Hat Certified System Administrator exam (EX200).</p>


         <h4 class="blue">Course content summary</h4>
         <ul>
           <li>Installation using Kickstart</li>
           <li>Manage filesystems and logical volumes</li>
           <li>Manage scheduled jobs</li>
           <li>Access network filesystems</li>
           <li>Manage SELinux</li>
           <li>Control firewalling</li>
           <li>Troubleshooting</li>
         </ul>

         <h4 class="blue">Audience for this course</h4>
         <p>This course is singularly designed for students who have completed Red Hat System Administration I (RH124). The organization of topics is such that it is not appropriate for student to use RH134 as a curriculum entry point. Students who have not taken a previous Red Hat course are encouraged to take either System Administration I if they are new to Linux, or the RHCSA Fast Track course (RH200) if they are experienced with enterprise Linux administration.</p>

         <h4 class="blue">Prerequisites for this course</h4>
         <p><a href="{{url('rh124')}}">Red Hat System Administration I (RH124)</a></p>


         <h4 class="blue">Outline for this course</h4>

         <p><b>Automate installation with Kickstart</b></p>
         <p>Automate the installation of Red Hat Enterprise Linux systems with Kickstart.</p>
         <br>

         <p><b>Use regular expressions with grep</b></p>
         <p>Write regular expressions that, when partnered with grep, will allow you to quickly isolate or locate content within text files.</p>
         <br>

         <p><b>Create and Edit text files with vim</b></p>
         <p>Introduce the vim text editor, with which you can open, edit, and save text files.</p>
         <br>

         <p><b>Create, View, and Edit text files</b></p>
         <p>Create, view, and edit text files from command output or in an editor.</p>
         <br>

         <p><b>Schedule future Linux tasks</b></p>
         <p>Schedule tasks to automatically execute in the future.</p>

         <p><b>Manage priority of Linux processes</b></p>
         <p>Influence the relative priorities at which Linux processes run.</p>

         <p><b>Control access to files with access control lists (ACL)</b></p>
         <p>Manage file security using POSIX access control lists.</p>
         <br>


         <p><b>Manage SELinux security</b></p>
         <p>Manage the Security Enhanced Linux (SELinux) behavior of a system to keep it secure in case of a network service compromise.</p>
         <br>


         <p><b>Connect to network-defined users and groups</b></p>
         <p>Configure systems to use central identity management services.</p>
         <br>


         <p><b>Add disks, partitions, and file systems to a Linux system</b></p>
         <p>Manage simple partitions and file systems..</p>



         <p><b>Manage logical volume management (LVM) storage</b></p>
         <p>Manage logical volumes from the command line.</p>
         <br>

         <p><b>Access networked attached storage with network file system (NFS)</b></p>
         <p>Access (secure) NFS shares.</p>
         <br>


         <p><b>Access networked storage with SMB</b></p>
         <p>Use autofs and the command line to mount and unmount SMB file systems.</p>
         <br>

         <p><b>Control and troubleshoot the Red Hat Enterprise Linux boot process</b></p>
         
         <br>


         <p><b>Limit network communication with firewall</b></p>
         <p>Configure a basic firewall.</p>
         <br>

         <p><b>Comprehensive review</b></p>
         <p>Practice and demonstrate the knowledge and skills learned in this course</p>




        </div>


    </div>

    <div>
      
    </div>
  </div>
</div>

@endsection