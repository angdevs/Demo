import { Component, Input, OnInit, EventEmitter, Output } from '@angular/core';

@Component({
  selector: 'app-child',
  templateUrl: './child.component.html',
  styleUrls: ['./child.component.css']
})
export class ChildComponent implements OnInit {

  // Parent to child 
  @Input() public toChild = "";
   

  // Child to Parent 
  @Output() newItemEvent = new EventEmitter();
  sendVal(value: string) {
    this.newItemEvent.emit(value);
  }


  childName : any = ""; 
  // sendVal(val:any){
  //   this.childName = val;
  // }

  constructor() { }
  
  ngOnInit(): void {
  }

}
