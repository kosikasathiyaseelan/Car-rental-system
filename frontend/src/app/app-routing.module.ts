import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SigninComponent } from './components/signin/signin.component';
import { SignupComponent } from './components/signup/signup.component';
import { UserProfileComponent } from './components/user-profile/user-profile.component';


import { ContactComponent } from './contact/contact.component';
import { BookingComponent } from './booking/booking.component';
import { HomeComponent } from './home/home.component';
import { HomeAdminComponent } from './home-admin/home-admin.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { VehicleComponent } from './vehicle/vehicle.component';
import { TestimonialComponent } from './testimonial/testimonial.component';
import { AboutComponent } from './about/about.component';
import { ViewFeedbackComponent } from './components/view-feedback/view-feedback.component';

const routes: Routes = [
 // { path: '', redirectTo: '/login', pathMatch: 'full' },
  { path: '', component: HomeComponent },
  { path: 'home-admin', component: HomeAdminComponent },
  { path: 'login', component: SigninComponent },
  { path: 'register', component: SignupComponent },
  { path: 'profile', component: UserProfileComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'about', component: AboutComponent },
  { path: 'booking', component: BookingComponent },
  { path: 'feedback', component: FeedbackComponent },
  { path: 'testiminial', component: TestimonialComponent },
  { path: 'vehicle', component: VehicleComponent },
  //{ path: 'view-contacts', component: ContactsViewComponent },
  { path: 'view-feedback', component: ViewFeedbackComponent }
  //{ path: 'add-vehicle', component: AddVehicleComponent }
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
