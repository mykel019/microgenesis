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
         <h2 class="text-center blue"><strong>Red Hat OpenStack Administration III (NEW)</strong></h2>
         <br>
         <h3 class="blue"><strong>Learn to deploy, manage, and configure storage and OpenStack</strong></h3>
         <br>
         <p>The Red Hat OpenStack Administration III (CL310) course provides extensive hands-on training for experienced system administrators in how to use the distributed storage features of Red Hat® Ceph Storage and the networking capabilities of OpenStack® Neutron. Students will set up a Ceph environment and its configuration as a back end for OpenStack, and configure and use the advanced features of OpenStack Neutron.</p>
         <br>
         <p>This course includes Red Hat Certified Engineer in Red Hat Openstack exam (EX310).</p>


         <h4 class="blue">Course Overview</h4>
         <p>Students will set up a Ceph environment and its configuration as a back end for Openstack, and configure and use the advanced features of OpenStack Neutron.</p>
         <br>
         
         <h4 class="blue">Course content summary</h4>
         <ul>
           <li>Deploy Red Hat Ceph Storage</li>
           <li>Manage snapshots in Red Hat Ceph Storage</li>
           <li>Access Ceph storage through Ceph block device (RBD) and Ceph object gateway (RADOSGW)</li>
           <li>Configure Red Hat Ceph Storage as a storage back end for OpenStack Services</li>
           <li>Manage networks based on VXLAN, VLAN and GRE</li>
           <li>Deploy and using load-balancer-as-a-service (LBaaS) in OpenStack Neutron</li>
           <li>Troubleshoot Neutron issues</li>
         </ul>

         <br>

         <p>Not sure if you have the correck skill-set knowledge? Find out by passing the online skills assessment</p>
         <br>


         <h4 class="blue">Audience and prerequisite</h4>
            <p>Experienced Linux® system administrators responsible for managing OpenStack environments who want to learn:</p>
            <ul>
                <li>To configure scalable and distributed storage as a storage back end for OpenStack</li>
                <li>The advanced features offered by OpenStack Neutron</li>
            </ul>


         <h4 class="blue">Prerequisites for this course</h4>
            <ul>
                <li>Red Hat Certified Engineer (RHCE) certification or equivalent experience</li>
                <li>Red Hat Certified System Administrator in Red Hat OpenStack certification or equivalent experience</li>
                <li>Have taken Red Hat OpenStack Administration (CL210) course</li>
            </ul>


         <h4 class="blue">Outline for this course</h4>

         <p><b>Introduction to Red Hat Ceph Storage</b></p>
         <p>Introduce Red Hat Ceph Storage architecture, components and atrributes</p>
         <br>

         <p><b>Describe Red Hat Ceph Storage components and features</b></p>
         <p>Describe the components and features of Red Hat Ceph Storage.</p>
         <br>

         <p><b>Deploy and access Red Hat Ceph Storage</b></p>
         <p>Create snapshots and clones for Red Hat Ceph Storage..</p>
         <br>

         <p><b>Create snapshots and clones</b></p>
         <p>Manage snapshots and clones of a Ceph Block Device (RBD).</p>
         <br>

         <p><b>Ceph with the Glance Image service</b></p>
         <p>Integrate Ceph with the OpenStack Glance Image service to store OpenStack images in Ceph.</p>
         <br>

         <p><b>Ceph with the Cinder Block Storage service</b></p>
         <p>Integrate Ceph with the OpenStack Cinder Block Storage service to provide OpenStack volumes in Ceph..</p>
         <br>

         <p><b>Ceph with Nova compute service</b></p>
         <p>Integrate Ceph with the OpenStack Nova compute service to store instance data in Ceph.</p>
         <br>

        <p><b>Introduce networking fundamentals</b></p>
         <p>Review networking concepts and deploy OpenStack with a separate Neutron networking node.</p>
         <br>

        <p><b>Network interfaces</b></p>
         <p>Manage network interfaces manually (using the ip command) and persistently</p>
         <br>

        <p><b>Virtual bridging</b></p>
         <p>Install and manage virtual network bridges</p>
         <br>

         <p><b>Virtual network devices</b></p>
         <p>Create and deploy virtual network devices.</p>
         <br>

        <p><b>Network namespaces</b></p>
         <p>Manage and implement netoworks inside a network namespace</p>
         <br>

         <p><b>Neutron services</b></p>
         <p>Verify and manage the Neutron services</p>
         <br>

         <p><b>Provisioning tenant networks</b></p>
         <p>Provision tenant networks using VXLAN tunnels, GRE tunnels and VLANs</p>
         <br>

         <p><b>Implementing load-balancer-as-a-service (LBaaS)</b></p>
         <p>Implement LbaaS</p>
         <br>

         <p><b>Neutron networking services</b></p>
         <p>Diagnose and troubleshoot issues with the Neutron networking service</p>
         <br>

         <p><b>Comprehensive Review</b></p>
         <p>Review tasks from the Red Hat OpenStack III course</p>
         <br>


         <h4 class="blue">Recommended next exam</h4>
         <p><b>Red Hat Certified Engineer in OpenStack exam (EX310)</b></p>
         <p>Become a RHCE in OpenStack by passing our exam, where you will demonstrate your abilities to integrate and configure with Red Hat Enterprise Linux OpenStack Platform, Red Hat Ceph Storage and Neutron services.</p>
         <br>

        </div>


    </div>

    <div>
      
    </div>
  </div>
</div>

@endsection