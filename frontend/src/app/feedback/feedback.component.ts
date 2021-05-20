import { stringify } from '@angular/compiler/src/util';
import { Component, OnInit} from '@angular/core';
import {FormBuilder,FormGroup,Validators } from '@angular/forms';

 @Component({
   selector: 'app-feedback',
   templateUrl: './feedback.component.html',
   styleUrls: ['./feedback.component.scss']
 })
 export class FeedbackComponent implements OnInit {
  feedbackForm:FormGroup;
  user :any = {};
  //image:String="assets/font/https://images.unsplash.com/photo-1542228262-3d663b306a53?ixlib=rb-1.2.1&q=80/erik-mclean-AaYAElNOxsQ-unsplash"
   constructor(private fb:FormBuilder) { }

   ngOnInit():void {
      this.feedbackForm=this.fb.group({
        name:['',[Validators.required,Validators.pattern('^[a-zA-Z]+$')]],
        email:['',[Validators.required,Validators.email]],
        phoneno:['',[Validators.required,Validators.pattern('^[0-9]+$'),Validators.min(10),Validators.max(13)]],
        postingdate:['',[Validators.required]],
        message:['',[Validators.required]]
    });
   }
  //  get name(){
  //     return this.feedbackForm.get('name');//as FormControl;
  //   }
  //   get email(){
  //     return this.feedbackForm.get('email');//as FormControl;
  //   }
  //   get phoneno(){
  //     return this.feedbackForm.get('phoneno');//as FormControl;
  //   }
  //   get postingDate(){
  //     return this.feedbackForm.get('postingDate');//as FormControl;
  //   }
  //   get message(){
  //     return this.feedbackForm.get('message');//as FormControl;
  //   }
   onSubmit(feedbackForm:FormGroup){
    console.log('Congrats,form submitted');
    console.log(this.feedbackForm.value);
    this.user=Object.assign(this.user,this.feedbackForm.value);
    localStorage.setItem('User',this.user);
    //localStorage.setItem('User',JSON stringify(this.user) );
    
    //images = ['../../assets/A.jpg','../../assets/B.jpg','../../assets/C.jpg'];
   }
  //  images  =['../../assets/car.jpg']
  }  
 



