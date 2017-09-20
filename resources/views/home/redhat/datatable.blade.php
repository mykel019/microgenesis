

       @foreach ($coursecategories as $coursecategory)

        <?php switch ($coursecategory->id) {
          case '1':
            $links = 'https://www.redhat.com/en/about/blog/introducing-the-red-hat-certified-system-administrator-rhcsa-certification';
            break;

          case '2':
            $links = 'https://www.redhat.com/en/services/certification/rhce';
            break;

          case '3':
            $links = 'https://www.redhat.com/en/services/certification/rhca';
            break;

          case '4':
            $links = 'https://www.redhat.com/en/search/Red%20Hat%20Jboss';
            break;
          
          default:
            $links = '#';
            break;
        } 

        ?>

        <h2 class="text-center" style="color: #428bca;margin-bottom: 30px; margin-top: 30px;"><strong><a href="{{$links}}">{{$coursecategory->course_name}}</a></strong></h2>

                       <table class="table table-responsive" style="margin-bottom: 100px;">
                            <thead>
                                <tr class="" style="background-color:#D64040; ">
                                    <th class="" style="color: #fff;"><strong>Course Code</strong></th>
                                    <th class="" style="color: #fff;"><strong>Course Title</strong></th>
                                    <th class="" style="color: #fff;"><strong>Duration</strong></th>
                                    <th class="" style="color: #fff;"><strong>Schedule</strong></th>
                                    <!-- <th class="text-center">Course Category</th> -->
                                </tr>
                            </thead>

                 @foreach ($trainings as $training)
                     @if($coursecategory->id == $training->course_category)
                            <tbody>
                                <tr class="">
                                    <td>{{$training->course_code}}</td>

            
                                       <?php switch ($training->course_code) {

                                        // RHCSA
                                            case 'RH124':
                                               $link = "rh124";
                                               break;

                                            case 'RH134':
                                               $link = "rh134";
                                               break;

                                            case 'RH199':
                                               $link = "rh199";
                                               break;

                                            case 'RH200':
                                               $link = "rh200";
                                               break;

                                            case 'RH135':
                                                $link = 'rh135';
                                              break;

                                            case 'EX200':
                                                $link = 'ex200';
                                              break;


                                        // RHCE

                                            case 'RH254':
                                                $link = 'rh254';
                                              break;

                                            case 'RH255':
                                                $link = 'rh255';
                                              break;

                                            case 'RH299':
                                                $link = 'rh299';
                                              break;

                                            case 'RH300':
                                                $link = 'rh300';
                                              break;

                                            case 'EX300':
                                                $link = 'ex300';
                                              break;


                                        // RHCA

                                              case 'RH236':
                                                $link = 'rh236';
                                              break;

                                              case 'RH270':
                                                $link = 'rh270';
                                              break;

                                              case 'RH318':
                                                $link = 'rh318';
                                              break;

                                              case 'RH403':
                                                $link = 'rh403';
                                              break;

                                              case 'RH413':
                                                $link = 'rh413';
                                              break;

                                              case 'RH436':
                                                $link = 'rh436';
                                              break;

                                              case 'RH442':
                                                $link = 'rh442';
                                              break;

                                              case 'CL210':
                                                $link = 'cl210';
                                              break;

                                              case 'CL310':
                                                $link = 'cl310';
                                              break;

                                              case 'RH242':
                                                $link = 'rh242';
                                              break;


                                        // JBOSS

                                              case 'JB225':
                                                $link = 'https://www.redhat.com/en/services/training/jb225-red-hat-jboss-enterprise-application-development-i';
                                              break;

                                              case 'JB248':
                                                $link = 'https://www.redhat.com/en/services/training/jb248-red-hat-jboss-application-administration-i';
                                              break;

                                              case 'JB325':
                                                $link = 'https://www.redhat.com/en/services/training/jb325-red-hat-jboss-enterprise-application-development-ii';
                                              break;

                                              case 'JB348':
                                                $link = 'https://www.redhat.com/en/services/training/jb348-red-hat-jboss-application-administration-ii';
                                              break;

                                              case 'EX225':
                                                $link = 'https://www.redhat.com/en/services/training/ex225-red-hat-jboss-certified-developer-exam';
                                              break;

                                              case 'EX248':
                                                $link = 'https://www.redhat.com/en/services/training/ex248-red-hat-certified-jboss-administration-rhcja-exam';
                                              break;

                                           
                                           default:
                                               $link = "#";
                                               break;
                                           
                                       } ?>


                                    <td><a href="{{$link}}" class="blue">&nbsp; {{$training->course_title}}</a></td>

                                    
                                    <td>{{$training->duration}}</td>
                                    <td>{{$training->date}}</td>
                                    <!-- <td>{{$training['course_categories']['course_name']}}</td> -->
                                </tr>
                            </tbody>
                    @endif
                @endforeach
                         </table>
       @endforeach

      
    <span>{{ $trainings->render() }}</span>

    <!-- <span><button class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> &nbsp;Remove</button></span> -->
 

