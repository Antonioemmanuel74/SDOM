<?php


   Route::get('/', 'PagesController@index');
    
   Route::get('service', 'PagesController@service');
    
   Route::get('solution', 'PagesController@solution');
    
   Route::get('KC', 'PagesController@KC');
    
   Route::get('company', 'PagesController@company');
    
   Route::get('assesment', 'PagesController@assesment');
    
   Route::get('BS_Account', 'PagesController@BS_Account');
    
   Route::get('BS_HumanResource','PagesController@BS_HumanResource');
    
   Route::get('BS_LegalDept','PagesController@BS_LegalDept');
    
   Route::get('BS_Marketing','PagesController@BS_Marketing');
    
   Route::get('BS_Operation','PagesController@BS_Operation');
    
   Route::get('BS_Procurement','PagesController@BS_Procurement');
    
   Route::get('BusinessSolution','PagesController@BusinessSolution');
    
   Route::get('C_AboutUs','PagesController@C_AboutUs');
    
   Route::get('C_CIC','PagesController@C_CIC');
   
    
   Route::get('C_Support','PagesController@C_Support');
    
   Route::get('Company','PagesController@Company');
    
   Route::get('ComplianceMgt','PagesController@ComplianceMgt');
    
   Route::get('CSoln_DataBackup','PagesController@CSoln_DataBackup');
    
   Route::get('DAM','PagesController@DAM');
    
   Route::get('Edm','PagesController@Edm');
    
   Route::get('I_Academics','PagesController@I_Academics');
    
   Route::get('I_Association','PagesController@I_Association');
    
   Route::get('I_Construction','PagesController@I_Construction');
    
   Route::get('I_Finance','PagesController@I_Finance');
                        
   Route::get('I_Government','PagesController@I_Government');
                           
   Route::get('I_HealthCare','PagesController@I_HealthCare');
                              
   Route::get('I_Insurance','PagesController@I_Insurance');
                                 
   Route::get('I_LawFirm','PagesController@I_LawFirm');
                                    
   Route::get('I_Finance','PagesController@I_Finance');
                                       
   Route::get('I_Manufacture','PagesController@I_Manufacture');
                                          
   Route::get('Industry','PagesController@Industry');
                                             
   Route::get('KC','PagesController@KC');
   
   Route::get('RecordsMgt','PagesController@RecordsMgt');
   
   Route::get('service','PagesController@service');
   
   Route::get('SME','PagesController@SME');
   
   Route::get('SME_DataBackup','PagesController@SME_DataBackup');
   
   Route::get('SME_DigitalConv','PagesController@SME_DigitalConv');
   
   Route::get('SME_RecordStorage','PagesController@SME_RecordStorage');
   
   Route::get('SME_SecureShereding','PagesController@SME_SecureShereding');
   
   Route::get('solution','PagesController@solution');
    
   Route::get('C_ContactUs', 
   ['as' => 'contact', 'uses' => 'PagesController@C_ContactUs']);
   
   Route::post('C_ContactUs', 
   ['as' => 'contact_store', 'uses' => 'PagesController@store']); 
    
        
    
    