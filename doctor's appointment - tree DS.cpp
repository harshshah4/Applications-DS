#include<iostream>
using namespace std;
#include<conio.h>
#include<stdio.h>
#include<math.h>
struct appoint
{
       appoint *l;
       appoint *r;
       char name[20];
}*s;
double n,p;
int h;
void formtree(appoint *e)
{
     static int i=1;
     static int k=0;
     k++;
     cout<<"\n\n\t\tPATIENT NAME\t\t:\t";
     cin>>e->name;
     if(e->l==NULL && i<h && k<n)
     {
                   i++;
                   e->l=new appoint;
                   e->l->l=e->l->r=NULL;
                   formtree(e->l);
     }
     if(e->r==NULL && i<h && k<n)
     {
          i++;
          e->r=new appoint;
          e->r->l=e->r->r=NULL;
         formtree(e->r);
     }
     i--;
}
void del(appoint *e,appoint *p)
{
     if(e->l)
     {
                   strcpy(e->name,e->l->name);
                   del(e->l,e);
     }
     else if(e->r)
     {
          strcpy(e->name,e->r->name);
          del(e->r,e);
     }
     else
     {
         if(p->l==e)
         p->l=NULL;
         else p->r=NULL;
     }
}                  
void show(appoint *e)
{
     cout<<"\n\n\t\t"<<e->name<<endl;
     if(e->l)
             show(e->l);
     if(e->r)
             show(e->r);
}
main()
{
      int j=0,l;
      appoint *e=new appoint,*t;
      cout<<"\n\n\t\t!!!WELCOME TO CLINIC!!!\n\t\t-----------------------\n\nENTER NUMBER OF PATIENTS\t\t:\t";
      cin>>n;
      if(n)
      {p=log(n+1)/log(2);p+=0.99;
      h=(int)p;
      //cout<<h;
      e->l=e->r=NULL;
      formtree(e);
      system("cls");
      while(e)
      {     
                       cout<<"\n\n\t1.\tDELETE\n\t  \t------\n\t2.\tSHOW\n\t  \t----\n\t3.\tEMERGENCY\n\t  \t----\n\t4.\tEXIT  \t---------\n\n\n\t\tENTER YOUR CHOICE\t\t:\t";
                       cin>>l;
                       switch(l)
                       {
                                case 1:
                                     cout<<"\n\n\t\tPATIENT "<<e->name<<" ENTERED CABIN!!!\n";
                                     if(e->l==NULL && e->r==NULL){e=NULL;}
                                     else
                                     {del(e,NULL);}
                                     cout<<"\n";
                                     system("pause");
                                     system("cls");
                                     break;
                                case 2:cout<<"\n\n\t\tPATIENTS LEFT\n\t\t-------------";
                                     show(e);
                                     cout<<"\n";
                                     system("pause");
                                     system("cls");
                                     break;
                                case 3:
                                     t=new appoint;
                                     t->l=e;
                                     t->r=NULL;
                                     cout<<"\n\n\tENTER EMERGENCY PATIENT NAME\t\t:\t";
                                     cin>>t->name;
                                     e=t;
                                     cout<<"\n";
                                     system("pause");
                                     system("cls");
                                     break;
                               case 4:
                                    exit(-1);
                                default: cout<<"\n\n\t\t\tINVALID CHOICE\n\t\t\t-------------";
                                         system("pause");
                                         system("cls");
                                         break;
                       }
      };
      }
      cout<<"\n\n\n\t\t!!!NO MORE PATIENT LEFT!!!";
      getch();
}
