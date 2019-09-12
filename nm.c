#include<stdio.h>
#include<conio.h>
void main()
{
  int a,b,c;
  clrscr();
  printf("enter three numbers:");
  scanf("%d%d%d",&a,&b,&c);
  {
    if(a>b && a>c)
    printf("a is big");
  }
  {
    if(b>c)
   printf("b is big");
   else
   printf("c is big");
  }
  getch();
}
