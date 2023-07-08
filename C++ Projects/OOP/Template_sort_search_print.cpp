#include<iostream>
using namespace std;

template <typename T >
bool searchelement(T arr[], T a, int size) {
	for (int i = 0; i < size; i++) {
		if (arr[i]==a) {
			return true;
		}
		else {
			return false;
		}
	}
}
template <typename T>
void sort_elements(T arr[], int size) {
	for (int i = 0; i < size; i++) {
		for (int j = 0; j < size; j++) {
			if (arr[j] > arr[i]){
			int temp = arr[i];
			arr[i] = arr[j];
			arr[j] = temp;
			}
		}
	}
	for (int i = 0; i < size;i++) {
		cout << arr[i];
	}
}

template <typename T>
void print_array(T arr[], int size) {
	for (int i = 0; i < size; i++) {
		cout << arr[i] << " , ";
	}
}

void main() {
	int arr[6] = { 1,9,2,4,7,8};
	sort_elements<int>(arr,6);
	print_array<int>(arr,6);
}