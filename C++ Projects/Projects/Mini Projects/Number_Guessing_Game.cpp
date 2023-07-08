#include<iostream>
#include<ctime>
#include<random>
using namespace std;
class game {
private:
	int ran;
	int guess;
	int score=0;
public:
	void guessNumber(int i) {
		ran = 1 + rand() % 6;
		cout << "---------------------" << endl;
		cout << "Turn : " << i << endl;
		cout << "Guess Number" << endl;
		cin >> guess;
		if (guess == ran) {
			cout << "Correct Guess" << endl;
			score++;
		}
		else {
			cout << "Wrong Guess" << endl;
			score--;
		}
		cout << "Number is = " << ran<<endl;
		cout << "Score is :" << score << endl;
		cout << "---------------------" << endl<<endl;
	}
	void show_score() {
		for (int i = 1; i <= 10; i++) {
			guessNumber(i);
		}
		if (score >= 3) {
			cout << "Congratulations ! You Won" << endl;
		}
		else {
			cout << "You lose ! Better Luck Next Time" << endl;
		}
	}
};
int main() {
	srand(time(0));
	system("color a");
	char choice='Y';
	game a;
	while (choice == 'Y' || choice ==  'y') {
		system("CLS");
		a.show_score();
		cout << endl << "Do you want to play again (Y/N)" << endl;
		cin >> choice;
	}
	cout << "Thanks for Playing "<<endl;
}