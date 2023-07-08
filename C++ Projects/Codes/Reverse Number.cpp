#include<iostream>
using namespace std;
int main() {
	int number,ans=0,digit=0;
	cout << "Enter Number " << endl;
	cin >> number;

	while (number!=0) {
		if (ans>INT16_MAX/10||ans<INT16_MIN/10) {
			return 0;
		}
		else {
			digit = number % 10;
			ans = digit + ans * 10;
			number /= 10;
		}
	}
	cout << ans;
}