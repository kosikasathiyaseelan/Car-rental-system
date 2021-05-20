import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { SigninComponent } from './components/signin/signin.component';
import { SignupComponent } from './components/signup/signup.component';
import { UserProfileComponent } from './components/user-profile/user-profile.component';

import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';

import { AuthInterceptor } from './shared/auth.interceptor';
import { ContactComponent } from './contact/contact.component';
import { BookingComponent } from './booking/booking.component';
import { HomeComponent } from './home/home.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { VehicleComponent } from './vehicle/vehicle.component';
import { TestimonialComponent } from './testimonial/testimonial.component';
import { AboutComponent } from './about/about.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

//Angular material imports
//import {MatInputModule} from '@angular/material/input';
//import {MatButtonModule} from '@angular/material/button';
//import {MatDatepickerModule} from '@angular/material/datepicker';
//import {MatSelectModule} from '@angular/material/select';
//import {MatFormFieldModule} from '@angular/material/form-field';

import { ViewFeedbackComponent } from './components/view-feedback/view-feedback.component';
import { HomeAdminComponent } from './home-admin/home-admin.component';
@NgModule({
  declarations: [
    AppComponent,
    SigninComponent,
    SignupComponent,
    UserProfileComponent,
    ContactComponent,
    BookingComponent,
    HomeComponent,
    FeedbackComponent,
    VehicleComponent,
    TestimonialComponent,
    AboutComponent,
    ViewFeedbackComponent,
    HomeAdminComponent
  
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ReactiveFormsModule,
    FormsModule,
    NgbModule,
    BrowserAnimationsModule
    // MatInputModule,
    // MatButtonModule,
    // MatDatepickerModule,
    // MatSelectModule,
    // MatFormFieldModule
  ],
  providers: [
    {
      provide: HTTP_INTERCEPTORS,
      useClass: AuthInterceptor,
      multi: true
      //feedbackService
    }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
