#include<iostream>
using namespace std;
void main() {

	int number;
	cout << "Enter Number ";
	cin >> number;
	int ans = 0;
	int i = 0;
	while (number!=0) {
		int bit = number & 1;
		ans = (bit*pow(10,i)) + ans;
		i++;
		number = number >> 1;
		cout << i;
	}
	cout << "Answer is : " << ans;
}