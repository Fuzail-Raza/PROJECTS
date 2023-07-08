#include<iostream>
using namespace std;

void inerstion_sort(int arr[],int size) {

	for (int i = 1; i < size;i++) {
		int temp = arr[i];
		int j = i - 1;
		for (; j >= 0;j--) {
			if (arr[j] > temp) {
				arr[j+1] = arr[j];
			}
			else
				break;
		}
		arr[j + 1] = temp;
	}

}
void display(int arr[],int size) {
	cout << "Array is ";
	for (int i = 0; i < size; i++) {
		cout << arr[i] << endl;
	}
}
void main() {
	int arr[6] = { 1,23,35,23,47,35 };
	display(arr, 6);
	inerstion_sort(arr, 6);
	display(arr, 6);
}