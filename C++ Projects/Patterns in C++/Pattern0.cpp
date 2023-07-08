#include<iostream>
using namespace std;
void main() {
	int row;
	cout << "Enter rows";
	cin >> row;
	int count = 1;
	for (int i = 1; i <= row;i++) {
		cout << endl;
		count = i;
		for (int j= 1; j <= i; j++) {
			cout << count;
			count++;
		}
	
	
	}

}