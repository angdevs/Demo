import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { DemoLibModule } from 'demo-lib';
 
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    DemoLibModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
