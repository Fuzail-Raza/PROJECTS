#include<iostream>
using namespace std;
class Time {
private:
	int hour, min, sec;
	char mode;
public:
	Time() {
		hour = 4, min = 32, sec = 26,mode='p';
	}
	Time(int hors,int mn,int sc,char mod) {
		if (hors > 0 && hors <= 12) {
			hour = hors;
		}
		else {
			cout << "Out of Range " << endl;
		}
		if (mn > 0 && min <= 59) {
			min = mn;
		}
		else {
			cout << "Out of Range " << endl;
		}
		if (sc <= 59 && sc > 0) {
			sec = sc;
		}
		else {
			cout << "Out of Range " << endl;
		}
		if (mod=='A' || mod == 'a' || mod == 'P' || mod == 'p') {
			mode = mod;
		}
		else {
			cout << "Out of Range "<<endl;
		}
}
	Time(int hors,int mn,int sc) {
		if (hors > 0 && hors <=12) {
			hour = hors;
		}
		else {
			cout << "Out of Range " << endl;
		}
		if (mn > 0 && min <= 59) {
			min = mn;
		}
		else {
			cout << "Out of Range " << endl;
		}
		if (sc <= 59 && sc > 0) {
			sec = sc;
		}
		else {
			cout << "Out of Range " << endl;
		}
	}
	Time(const Time& d){
		hour = d.hour;
		min = d.min;
		sec = d.sec;
		mode = d.mode;
	}
	int getHours(){
		return hour;
	}
	int getMinutes() {
		return min;
	}
	int getSeconds() {
		return sec;
	}
	char getMode() {
		return mode;
	}
	void setHours(int hours) {
		hour = hours;
	}
	void setMinutes(int minutes) {
		min = minutes;
	}
	void setSeconds(int seconds) {
		sec = seconds;
	}
	void setMode(char mod) {
		mode = mod;
	}
	void displayTime() {
		cout <<endl<< "Current Time is : " << endl << hour << " : " << min << " : " << sec << "  " << mode;
	}
	long int convertToSeconds() {
		return (sec+(min*60)+(hour*3600));
	}
	long int convertToMinutes(){
		return (min + (sec/60) + (hour*60));
		
	}
	int convertToHours() {
		return (hour + (min / 60) + (sec / 3600));
	}
	void convertTo24HourFormat() {
		if (hour!=12 &&  mode == 'P' || mode =='p') {
			hour = 12+ hour;
		}

		if (hour == 24 && mode == 'A' || mode == 'a') {
			hour = 0;
		}
		mode = ' ';
		cout << endl<< "Time in 24-Hour Format : " << hour << " : " << min << " : " << sec << endl;
	}
	void incrementSeconds(int sc) {
		sec = sec + sc;
			if (sec >= 60 ) {
				sec = sec - 60;
				int a = sec / 60;
				min =min+a+1;
				sec= sec % 60;
			}
			int b = min / 60;
			if (min >= 60) {
				min = min - 60;
				hour = hour + b;
				min = min % 60;
				
			}
			if (hour >= 12) {
				if (mode == 'A' || mode == 'a') {
					mode = 'P';
				}
				else if (mode == 'P' || mode == 'p') {
					mode = 'A';
				}
				hour = 24 - hour;
			}
		
		cout <<endl<< "Current Time is : " << endl << hour << " : " << min << " : " << sec << "  " << mode << endl;
	}
	void incrementMinutes(int mn) {
		min = min + mn;
		int b = min / 60;
		if (min >= 60) {
			min = min - 60;
			hour = hour + b + 1;
			min = min % 60;

		}
		if (hour >= 12) {
			if (mode == 'A' || mode == 'a') {
				mode = 'P';
			}
			else if (mode == 'P' || mode == 'p') {
				mode = 'A';
			}
			hour = 24 - hour;
		}
		cout << endl <<"Current Time is : " << endl << hour << " : " << min << " : " << sec << "  " << mode << endl;
	}
};
int main() {
	Time a1 = Time(1, 32, 24, 'P');
	a1.displayTime();
	cout << endl <<a1.convertToMinutes();
	a1.setHours(4);
	a1.displayTime();
	a1.incrementMinutes(12);
	a1.incrementSeconds(6);
	cout << endl<< a1.convertToHours();
	cout <<endl<< a1.convertToMinutes();
	cout <<endl<< a1.convertToSeconds();
	cout<<endl<<a1.getMode();
	Time t2;
	t2 = a1;
	t2.displayTime();
	t2.convertTo24HourFormat();
}