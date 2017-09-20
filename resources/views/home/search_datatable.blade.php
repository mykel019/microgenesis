


@if(count($results) == 0)

  <table class="table table-responsive">
  <tbody>
          <tr>
            <td style="font-size: 38px!important;" class="blue">No Records Found</td>
          </tr>
  </tbody>
  </table>

@else

  <table class="table table-responsive">
  <tbody>
       @foreach ($results as $result)

          <?php 
            switch ($result->id) {
              case '1':
                $link = "/datacenter";
                break;

              case '2':
                $link = "/informationsecurity";
                break;

              case '3':
                $link = "/network";
                break;

              case '4':
                $link = "/pcvolume";
                break;

              case '5':
                $link = "/pcrental";
                break;

              case '6':
                $link = "/licensing";
                break;

              case '7':
                $link = "/infrastructure";
                break;

              case '8':
                $link = "/documentmanagement";
                break;

              case '9':
                $link = "/services";
                break;

              case '10':
                $link = "/education";
                break;

              case '11':
                $link = "/mobile";
                break;

              case '12':
                $link = "/cloud";
                break;

              case '13':
                $link = "/products";
                break;

              case '14':
                $link = "/dc-servers";
                break;

              case '15':
                $link = "/dc-storage";
                break;

              case '16':
                $link = "/dc-virtualization";
                break;

              case '17':
                $link = "/sophos";
                break;

              case '18':
                $link = "/paloalto";
                break;

              case '19':
                $link = "/solarwinds";
                break;

              case '20':
                $link = "/kaseya";
                break;

              case '21':
                $link = "/huwaei";
                break;

              case '22':
                $link = '/hp';
                break;

              case '23':
                $link = "/cisco";
                break;

              case '24':
                $link = "/lenovo";
                break;

              case '25':
                $link = "/ibm";
                break;

              case '26':
                $link = "/emc";
                break;

              case '27':
                $link = "/synology";
                break;

              case '28':
                $link = "/dell";
                break;

              case '29':
                $link = "/acer";
                break;

              case '30':
                $link = "/asus";
                break;

              case '31':
                $link = "/microsoft";
                break;

              case '32':
                $link = "/office365";
                break;

              case '33':
                $link = "/azure";
                break;

              case '34':
                $link = "/windows10";
                break;

              case '35':
                $link = "/biz-anywhere";
                break;

              case '36':
                $link = "/modernbiz";
                break;

              case '37':
                $link = "/ms-services";
                break;

              case '38':
                $link = "/visualstudio";
                break;

              case '39':
                $link = "/endsupport";
                break;

              case '40':
                $link = "/autocad-lt";
                break;

              case '41':
                $link = "/autocad";
                break;

              case '42':
                $link = "/ds-standard";
                break;

              case '43':
                $link = "/ds-premium";
                break;

              case '44':
                $link = "/ds-ultimate";
                break;

              case '45':
                $link = "/ds-infrastructure";
                break;

              case '46':
                $link = "/revit-suite";
                break;

              case '47':
                $link = "/adobe";
                break;

              case '48':
                $link = "/kofax";
                break;

              case '49':
                $link = "/smartserve";
                break;

              case '50':
                $link = "/ms-proffservices";
                break;

              case '51':
                $link = "/redhat";
                break;

              case '52':
                $link = "/pearsonvue";
                break;

              case '53':
                $link = "/varonis";
                break;

              case '54':
                $link = "/tenable";
                break;

              case '55':
                $link = "/gigamon";
                break;

              case '56':
                $link = "/forescout";
                break;

              case '57':
                $link = "/home/about";
                break;

              case '58':
                $link = "/awards2";
                break;

              case '59':
                $link = "/certificate";
                break;

              case '60':
              $link = "/home/contact";
                break;
              
              default:
                # code...
                break;
            }

           ?>
       
            <tr>
              <td style="font-size: 38px!important;"><a href="{{$link}}"><h1 class="blue">{{$result->data_name}}</h1><h6>{{$result->description}}</h6></a></td>
            </tr>

       @endforeach
       
  </tbody>
  </table>
    <span>{{ $results->render() }}</span>

@endif


 

