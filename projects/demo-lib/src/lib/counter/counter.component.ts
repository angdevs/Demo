import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'lib-counter',
  templateUrl: './counter.component.html',
  styleUrls: ['./counter.component.css']
})
export class CounterComponent implements OnInit {


  counter : any = 0; 
  incrementVal(){
   this.counter++;
  }

  decrementVal(){
    this.counter--;
  }

  constructor() { }

  

  ngOnInit(): void {
  }

}
