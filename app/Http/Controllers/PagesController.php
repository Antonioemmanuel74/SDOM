<?php namespace sdom\Http\Controllers;

use sdom\Http\Requests;
use sdom\Http\Controllers\Controller;

use Illuminate\Http\Request;

use sdom\Http\Requests\ContactFormRequest;

class PagesController extends Controller {

	//
public function index()
        {
            return view ('pages.index');
        }
        
public function service()
	{
		return view('pages.service');
	}

        public function assesment()
        {
            return view('pages.assesment');
        }
        
        public function BS_Account()
        {
            return view('pages.BS_Account');
        }

        public function BS_HumanResource()
        {
            return view('pages.BS_HumanResource');
        }
      
        public function BS_LegalDept()
        {
            return view('pages.BS_LegalDept');
        }
        
        public function BS_Marketing()
        {
            return view('pages.BS_Marketing');
        }
        public function BS_Operation()
        
        {
            return view('pages.BS_Operation');
        }
        public function BS_Procurement()
        {
            return view('pages.BS_Procurement');
        }
        
        public function BusinessSolution()
        {
            return view ('pages.BusinessSolution');
        }
        
         public function C_AboutUs()
        {
            return view ('pages.C_AboutUs');
        }
        
         public function C_CIC()
        {
            return view ('pages.C_CIC');
        }
        
         public function C_ContactUs()
        {
            return view ('pages.C_ContactUs');
        }
        
         public function C_Support()
        {
            return view ('pages.C_Support');
        }
        
         public function Company()
        {
            return view ('pages.Company');
        }
        
         public function ComplianceMgt()
        {
            return view ('pages.ComplianceMgt');
        }
        
         public function CSoln_DataBackup()
        {
            return view ('pages.CSoln_DataBackup');
        }
        
         public function DAM()
        {
            return view ('pages.DAM');
        }
        
         public function Edm()
        {
            return view ('pages.Edm');
        }
        
         public function I_Academics()
        {
            return view ('pages.I_Academics');
        }
        
         public function I_Association()
        {
            return view ('pages.I_Association');
        }

         public function I_Construction()
        {
            return view ('pages.I_Construction');
        }
        
         public function I_Finance()
        {
            return view ('pages.I_Finance');
        }
        
         public function I_Government()
        {
            return view ('pages.I_Government');
        }
        
         public function I_HealthCare()
        {
            return view ('pages.I_HealthCare');
        }
        
         public function I_Insurance()
        {
            return view ('pages.I_Insurance');
        }
        
         public function I_LawFirm()
        {
            return view ('pages.I_LawFirm');
        }
        
         public function I_Manufacture()
        {
            return view ('pages.I_Manufacture');
        }
        
         public function Industry()
        {
            return view ('pages.Industry');
        }
        
         public function KC()
        {
            return view ('pages.KC');
        }
         public function RecordsMgt()
        {
            return view ('pages.RecordsMgt');
        }
         public function SME()
        {
            return view ('pages.SME');
        }
         public function SME_DataBackup()
        {
            return view ('pages.SME_DataBackup');
        }
         public function SME_DigitalConv()
        {
            return view ('pages.SME_DigitalConv');
        }
         public function SME_RecordStorage()
        {
            return view ('pages.SME_RecordStorage');
        }
        
         public function SME_SecureShereding()
        {
            return view ('pages.SME_SecureShereding');
        }
         public function solution()
        {
            return view ('pages.solution');
        }
        
         public function store(ContactFormRequest $request)
{

       \Mail::send('pages.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
             'number' => $request->get('number'),
            'user_message' => $request->get('message')
        ), function($message)
     {
        $message->from('emmanuel@ephraimit.com');
         $message->to('emmanuel@ephraimit.com', 'Admin')->subject('ontact Us Form');
     });
    
  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

}
    
        


}
