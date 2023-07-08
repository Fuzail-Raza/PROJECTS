#include<iostream>
using namespace std;
void main() {
	int row;
	cout << "Enter rows";
	cin >> row;
	int count = row;
	for (int i = 1; i <= row; i++) {
		cout << endl;
		for (int k = i; k >= 1; k--) {
			cout << k;
		}

	}

}