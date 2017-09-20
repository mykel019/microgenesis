<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

// Route::get('home',function(){
// 	return view('home.index');
// });

// Route::get('admin','AdminController@index');
// Route::post('login','AdminController@login');


// Route::get('test',function(){
// 	return view('test');
// });

// Route::get('logout','AdminController@logout');

// Route::group(['middleware' => 'auth']),function(){
//     Route::controllers([
//         'users'     => 'UsersController',,
//     ]);
// }

// Route::controllers([
// 		'admin' => 'AdminController',
// 	]);


Route::auth();

// Route::get('/home', 'HomeController@index');
// Route::get('/dashboard','AdminController@index');

Route::group(['middleware'=>['auth']],function(){
    Route::controllers([
		'admin'		 		=> 'AdminController',
        'training'  		=> 'TrainingsController',
        'coursecategory'	=> 'CourseCategoryController',
        'message'			=> 'ContactController',
        'data'				=> 'DataController'
    ]);

});


Route::controllers([
    	'home'		 		=> 'HomeController',
    	'certification' 	=> 'TrainingController',
    	'contact'			=> 'ContactController',
    	'search'			=> 'SearchController'
	]);


Route::get('datacenter',function(){
	return view('home.datacenter.datacenter');
});
	
	Route::get('dc-servers',function(){
		return view('home.datacenter.dc-servers');
	});


	Route::get('dc-storage',function(){
		return view('home.datacenter.dc-storage');
	});

			Route::get('huwaei',function(){
				return view('home.datacenter.huwaei');
			});

			Route::get('ibm',function(){
				return view('home.datacenter.ibm');
			});

			Route::get('emc',function(){
				return view('home.datacenter.emc');
			});

			Route::get('synology',function(){
				return view('home.datacenter.synology');
			});

	Route::get('dc-virtualization',function(){
		return view('home.datacenter.dc-virtualization');
	});


Route::get('informationsecurity',function(){
	return view('home.informationsecurity.informationsecurity');
});
	
	Route::get('sophos',function(){
		return view('home.informationsecurity.sophos');
	});

	Route::get('paloalto',function(){
		return view('home.informationsecurity.paloalto');
	});

	Route::get('solarwinds',function(){
		return view('home.informationsecurity.solarwinds');
	});

	Route::get('kaseya',function(){
		return view('home.informationsecurity.kaseya');
	});

Route::get('network',function(){
	return view('home.network');
});


// PCVOLUME****************************************************

Route::get('pcvolume',function(){
	return view('home.pcvolume.pcvolume');
});
	Route::get('hp',function(){
		return view('home.pcvolume.hp');
	});

	Route::get('lenovo',function(){
		return view('home.pcvolume.lenovo');
	});

	Route::get('dell',function(){
		return view('home.pcvolume.dell');
	});

	Route::get('acer',function(){
		return view('home.pcvolume.acer');
	});

	Route::get('asus',function(){
		return view('home.pcvolume.asus');
	});


Route::get('pcrental',function(){
	return view('home.pcrental');
});


// LICENSING******************************************

Route::get('licensing',function(){
	return view('home.mslicensing.licensing');
});

	Route::get('microsoft',function(){
		return view('home.mslicensing.microsoft');
	});
		Route::get('office365',function(){
			return view('home.mslicensing.office365');
		});

		Route::get('modernbiz',function(){
			return view('home.mslicensing.modernbiz');
		});

		Route::get('biz-anywhere',function(){
			return view('home.mslicensing.anywhere');
		});

		Route:: get('azure',function(){
			return view('home.mslicensing.azure');
		});

		Route::get('endsupport',function(){
			return view('home.mslicensing.endsupport');
		});

		Route::get('windows10',function(){
			return view('home.mslicensing.windows10');
		});

		Route::get('visualstudio',function(){
			return view('home.mslicensing.visualstudio');
		});

		Route::get('ms-services',function(){
			return view('home.mslicensing.ms-services');
		});



	Route::get('autodesk',function(){
		return view('home.mslicensing.autodesk');
	});
		Route::get('autocad-lt',function(){
			return view('home.mslicensing.autodesk.autocad-lt');
		});

		Route::get('autocad',function(){
			return view('home.mslicensing.autodesk.autocad');
		});

		Route::get('ds-standard',function(){
			return view('home.mslicensing.autodesk.ds-standard');
		});

		Route::get('ds-premium',function(){
			return view('home.mslicensing.autodesk.ds-premium');
		});

		Route::get('ds-ultimate',function(){
			return view('home.mslicensing.autodesk.ds-ultimate');
		});

		Route::get('ds-infrastructure',function(){
			return view('home.mslicensing.autodesk.ds-infrastructure');
		});

		Route::get('revit-suite',function(){
			return view('home.mslicensing.autodesk.revit-suite');
		});

	Route::get('adobe',function(){
		return view('home.mslicensing.adobe');
	});


// Data Center infrastructure


Route::get('infrastructure',function(){
	return view('home.infrastructure');
});



Route::get('documentmanagement',function(){
	return view('home.kofax.documentmanagement');
});
	
	Route::get('kofax',function(){
		return view('home.kofax.kofax');
	});


// Professional Services
Route::get('services',function(){
	return view('home.services');
});
	
	Route::get('smartserve',function(){
		return view('home.services.smartserve');
	});

	Route::get('ms-proffservices',function(){
		return view('home.services.ms-proffservices');
	});


// Red Hat

Route::get('education',function(){
	return view('home.redhat.education');
});

	Route::get('redhat',function(){
		return view('home.redhat.index');
	});

		// RHCSA

		Route::get('rh124',function(){
			return view('home.redhat.courses.rh124');
		});

		Route::get('rh134',function(){
			return view('home.redhat.courses.rh134');
		});

		Route::get('rh199',function(){
			return view('home.redhat.courses.rh199');
		});

		Route::get('rh200',function(){
			return view('home.redhat.courses.rh200');
		});

		Route::get('rh135',function(){
			return view('home.redhat.courses.rh135');
		});

		Route::get('ex200',function(){
			return view('home.redhat.courses.ex200');
		});

		// RHCE

		Route::get('rh254',function(){
			return view('home.redhat.courses.rh254');
		});

		Route::get('rh255',function(){
			return view('home.redhat.courses.rh255');
		});

		Route::get('rh299',function(){
			return view('home.redhat.courses.rh299');
		});

		Route::get('rh300',function(){
			return view('home.redhat.courses.rh300');
		});

		Route::get('ex300',function(){
			return view('home.redhat.courses.ex300');
		});



		// RHCA

		Route::get('rh236',function(){
			return view('home.redhat.courses.rh236');
		});

		Route::get('rh270',function(){
			return view('home.redhat.courses.rh270');
		});

		Route::get('rh318',function(){
			return view('home.redhat.courses.rh318');
		});

		Route::get('rh403',function(){
			return view('home.redhat.courses.rh403');
		});

		Route::get('rh413',function(){
			return view('home.redhat.courses.rh413');
		});

		Route::get('rh436',function(){
			return view('home.redhat.courses.rh436');
		});

		Route::get('rh442',function(){
			return view('home.redhat.courses.rh442');
		});

		Route::get('cl210',function(){
			return view('home.redhat.courses.cl210');
		});

		Route::get('cl310',function(){
			return view('home.redhat.courses.cl310');
		});

		Route::get('rh242',function(){
			return view('home.redhat.courses.rh242');
		});



		// Jboss

		Route::get('jb225',function(){
			return view('home.redhat.courses.jb225');
		});

		Route::get('jb248',function(){
			return view('home.redhat.courses.jb248');
		});

		Route::get('jb325',function(){
			return view('home.redhat.courses.jb325');
		});

		Route::get('jb348',function(){
			return view('home.redhat.courses.jb348');
		});

		Route::get('ex225',function(){
			return view('home.redhat.courses.ex225');
		});

		Route::get('ex248',function(){
			return view('home.redhat.courses.ex248');
		});



	Route::get('pearsonvue',function(){
		return view('home.redhat.pearsonvue');
	});



Route::get('mobile',function(){
	return view('home.mobile');
});

Route::get('cloud',function(){
	return view('home.cloud');
});


Route::get('cisco',function(){
	return view('home.cisco');
});


Route::get('awards',function(){
	return view('home.awards');
});

Route::get('awards2',function(){
	return view('home.awards2');
});

Route::get('certificate',function(){
	return view('home.certificate');
});

Route::get('profile',function(){
	return view('home.profile');
});





// Emerging products


Route::get('products',function(){
	return view('home.products');
});

	Route::get('varonis',function(){
		return view('home.products.varonis');
	});

	Route::get('tenable',function(){
		return view('home.products.tenable');
	});

	Route::get('gigamon',function(){
		return view('home.products.gigamon');
	});

	Route::get('forescout',function(){
		return view('home.products.forescout');
	});


Route::get('careers',function(){
	return view('home.careers');
})




//     Route::group(['middleware'=>['auth']],function(){
    
//     Route::get('/', 'DashboardController@index');
//     // Route::get('/test', 'DashboardController@test');

// });




?>
