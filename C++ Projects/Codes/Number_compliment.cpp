#include<iostream>
using namespace std;

int main() {

	int num,mask=0;
	cout << "Enter Number ";
	cin >> num;
	if (num == 0)
		cout << 1;
	return 0;

	int num1 = num;
	while (num1!=0) {
		mask=(mask << 1)|1;
		num1=num1 >> 1;

	}
	int ans = ~num & mask;
	cout << ans;
}