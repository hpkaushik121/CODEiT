#include<iostream>
using namespace std;
int main(){
   long double h,s,o;
   int t;
   cout<<"enter t";
   cin>>t;
  for(int i=0;i<t;i++){
    cin>>h;
    cin>>s;
    cin>>o;
     if(h>50 && s<0.7 && o>5600){
    cout<<"A+";
   }
   else if(h>50 && s<0.7 && o<5600){
    cout<<"A";
   }
   else if(h<50 && s<0.7 && o>5600){
    cout<<"B+";
   }
   else if(h>50 && s>0.7 && o>5600){
    cout<<"B";
   }
   else if(h>50 || s<0.7 || o>5600){
    cout<<"C";
   }
   else{
    cout<<"F";
   }
  }
    return 0;

}

