#include<iostream>
using namespace std;
double calculateRetail(double wholesale,double markupprice){
	return (markupprice * wholesale) / 100 + wholesale ;
}
void main() {
	double whole, markup;
	cout << "Enter Whole Sale Price ";
	cin >> whole;
	cout << "Enter Markup Price ";
	cin >> markup;
	cout <<"Retail Price is : " << calculateRetail(whole, markup);
}