#include<iostream>
using namespace std;
void main() {
	int row;
	cout << "Enter rows";
	cin >> row;
	int count = row;
	for (int i = 1; i <= row; i++) {
		cout << endl;
		for (int k = i; k <= row;k++) {
			cout << " ";
		}
		for (int j = 1; j <= i;j++) {
			cout << "**";
		}

	}

	for (int i = row; i >= 1; i--) {
		cout << endl;
		for (int k = i; k <= row; k++) {
			cout << " ";
		}
		for (int j = 1; j <= i; j++) {
			cout << "**";
		}

	}

}