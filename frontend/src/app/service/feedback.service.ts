import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class FeedbackService {

  constructor(private http: HttpClient) { }

  // getAllVehicles() {
  //   return this.http.get('http://localhost:8000/api/vehicles')
  // }
  getAllFeedback() {
    return this.http.get('http://localhost:8000/api/testimonials')
  }

  saveFeedback(form){
    const feedback={
      name:form.get('name').value,
      email:form.get('email').value,
      phoneno:form.get('phoneno').value,
      postingdate:form.get('postingdate').value,
      message:form.get('message').value
    }
    return this.http.post<any>('http://localhost:8000/api/testimonial',feedback);
  }
}
