using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OOP_ASS_04
{
    public partial class Form1 : Form
    {
        public float[] point = new float[6];
        
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
       
        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                MessageBox.Show("Marks should not be empty"); 
            }
            else if (Int32.Parse(textBox1.Text)>100|| Int32.Parse(textBox1.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            if (textBox2.Text == "")
            {
                MessageBox.Show("Marks should not be empty");
            }
            else if (Int32.Parse(textBox2.Text) > 100 || Int32.Parse(textBox2.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {
            if (textBox3.Text == "")
            {
                MessageBox.Show("Marks should not be empty");
            }
            else if (Int32.Parse(textBox3.Text) > 100 || Int32.Parse(textBox3.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {
            if (textBox4.Text == "")
            {
                MessageBox.Show("Marks should not be empty");
            }
            else if (Int32.Parse(textBox4.Text) > 100 || Int32.Parse(textBox4.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {
            if (textBox5.Text == "")
            {
                MessageBox.Show("Marks should not be empty");
            }
            else if (Int32.Parse(textBox5.Text) > 100 || Int32.Parse(textBox5.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void textBox6_TextChanged(object sender, EventArgs e)
        {
            if (textBox6.Text == "")
            {
                MessageBox.Show("Marks should not be empty");
            }
            else if (Int32.Parse(textBox6.Text) > 100 || Int32.Parse(textBox6.Text) < 0)
            {
                MessageBox.Show("Marks are out of Range");
            }
        }

        private void label11_Click(object sender, EventArgs e)
        {
            
        }

        private void label11_Click_1(object sender, EventArgs e)
        {
            
            
        }
        bool changecolor(int a)
        {
            if (a > 100 || a < 0)
            {
                return true;
            }
            return false;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "" || textBox2.Text == "" || textBox3.Text == "" || textBox4.Text == "" || textBox5.Text == "" || textBox6.Text == "")
            {
                MessageBox.Show("Cannot Be Empty");
            }
            else if ((Int32.Parse(textBox1.Text) > 100 || Int32.Parse(textBox1.Text) < 0) || (Int32.Parse(textBox2.Text) > 100 || Int32.Parse(textBox2.Text) < 0) || (Int32.Parse(textBox3.Text) > 100 || Int32.Parse(textBox3.Text) < 0) || (Int32.Parse(textBox4.Text) > 100 || Int32.Parse(textBox4.Text) < 0) || (Int32.Parse(textBox5.Text) > 100 || Int32.Parse(textBox5.Text) < 0) || (Int32.Parse(textBox6.Text) > 100 || Int32.Parse(textBox6.Text) < 0))
            {
                MessageBox.Show("Out Of Range");
                if (changecolor(Int32.Parse(textBox1.Text)))
                {
                    textBox1.BackColor = Color.Tomato;
                }
                if (changecolor(Int32.Parse(textBox2.Text)))
                {
                    textBox2.BackColor = Color.Tomato;
                }
                if (changecolor(Int32.Parse(textBox3.Text)))
                {
                    textBox3.BackColor = Color.Tomato;
                }
                if (changecolor(Int32.Parse(textBox4.Text)))
                {
                    textBox4.BackColor = Color.Tomato;
                }
                if (changecolor(Int32.Parse(textBox5.Text)))
                {
                    textBox5.BackColor = Color.Tomato;
                }
                if (changecolor(Int32.Parse(textBox6.Text)))
                {
                    textBox6.BackColor = Color.Tomato;
                }
            }
            else if (comboBox1.Text == "" || comboBox2.Text == "" || comboBox3.Text == "" || comboBox4.Text == "" || comboBox5.Text == "" || comboBox6.Text == "")
            {
                MessageBox.Show("Credit Hour Missing");
            }
            else
            {
                label7.Visible = true;
                label12.Text = Grade(textBox1.Text, checkBox1.Checked,0); label12.Visible = true; textBox1.BackColor = Color.White;
                label13.Text = Grade(textBox2.Text, checkBox2.Checked,1); label13.Visible = true; textBox2.BackColor = Color.White;
                label14.Text = Grade(textBox3.Text, checkBox3.Checked,2); label14.Visible = true; textBox3.BackColor = Color.White;
                label15.Text = Grade(textBox4.Text, checkBox4.Checked,3); label15.Visible = true; textBox4.BackColor = Color.White;
                label16.Text = Grade(textBox5.Text, checkBox5.Checked,4); label16.Visible = true; textBox5.BackColor = Color.White;
                label17.Text = Grade(textBox6.Text, checkBox6.Checked,5); label17.Visible = true; textBox6.BackColor = Color.White;
                gpoint1();
                label11.Visible = true;
                label11.Text = GPA().ToString("0.00");
                void gpoint1()
                {
                    float[] arr= new float[6];
                    if (float.Parse(textBox1.Text) < 80) {
                        arr[0] = (float.Parse(textBox1.Text) % 10);
                        point[0] = point[0] + (arr[0] / 10);
                    }
                    if (float.Parse(textBox2.Text) < 80)
                    {
                        arr[1] = (float.Parse(textBox2.Text) % 10);
                        point[1] = point[1] + (arr[1] / 10);
                    }
                    if (float.Parse(textBox3.Text) < 80)
                     {
                        arr[2] = (float.Parse(textBox3.Text) % 10);
                        point[2] = point[2] + (arr[2] / 10);
                        }
                    if (float.Parse(textBox4.Text) < 80)
                       {
                         arr[3] = (float.Parse(textBox4.Text) % 10);
                         point[3] = point[3] + (arr[3] / 10);
                       }
                    if (float.Parse(textBox5.Text) < 80)
                       {
                          arr[4] = (float.Parse(textBox5.Text) % 10);
                          point[4] = point[4] + (arr[4] / 10);
                       }
                    if (float.Parse(textBox6.Text) < 80)
                       {
                        arr[5] = (float.Parse(textBox6.Text) % 10);
                          point[5] = point[5] + (arr[5] / 10);
                       }
                }
                void combo(int i)
                {
                    if (i == 0)
                        comboBox1.Text = "0";
                    if (i == 1)
                        comboBox2.Text = "0";
                    if (i == 2)
                        comboBox3.Text = "0";
                    if (i == 3)
                        comboBox4.Text = "0";
                    if (i == 4)
                        comboBox5.Text = "0";
                    if (i == 5)
                        comboBox6.Text = "0";
                }
                string Grade(string c, bool d,int i)
                {
                    int a = Int32.Parse(c);
                    if (a >= 90 && a <= 100)
                    {
                        if (!d)

                        {
                            point[i] = 4;
                            return "A+";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else if (a >= 80 && a < 90)
                    {
                        if (!d)
                        {
                            point[i] = 4;
                            return "A";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else if (a >= 70 && a < 80)
                    {
                        if (!d)
                        {
                            point[i] = 3;
                            return "B";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else if (a >= 60 && a < 70)
                    {
                        if (!d)
                        {
                            point[i] = 2;
                            return "C";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else if (a >= 50 && a < 80)
                    {
                        if (!d)
                        {
                            point[i] = 1;
                            return "D";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else if (a >= 0 && a < 50)
                    {
                        if (!d)
                        {
                            point[i] = 0;
                            return "F";
                        }
                        else
                        {
                            combo(i);
                            return "W";
                        }
                    }
                    else
                    {
                        if (d)
                        {
                            combo(i);
                            return "W";
                        }
                    }

                    return "0";
                }
                float GPA()
                {
                    float gpa , sum;
                    if (checkBox1.Checked && checkBox2.Checked && checkBox3.Checked && checkBox4.Checked && checkBox5.Checked && checkBox6.Checked)
                    {
                        gpa = 0;
                    }
                    else {
                        sum = (float.Parse(comboBox1.Text) * point[0]) + (float.Parse(comboBox2.Text) * point[1]) + (float.Parse(comboBox3.Text) * point[2]) + (float.Parse(comboBox4.Text) * point[3]) + (float.Parse(comboBox5.Text) * point[4]) + (float.Parse(comboBox6.Text) * point[5]);
                        gpa = sum / (float.Parse(comboBox1.Text) + float.Parse(comboBox2.Text) + float.Parse(comboBox3.Text) + float.Parse(comboBox4.Text) + float.Parse(comboBox5.Text) + float.Parse(comboBox6.Text));
                        
                        return gpa;
                    }
                    return 0;
                }
            }
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            label12.Visible = false;
        }

        private void checkBox2_CheckedChanged(object sender, EventArgs e)
        {
            label13.Visible = false;
        }

        private void checkBox4_CheckedChanged(object sender, EventArgs e)
        {
            label15.Visible = false;
        }

        private void checkBox3_CheckedChanged(object sender, EventArgs e)
        {
            label14.Visible = false;
        }

        private void checkBox5_CheckedChanged(object sender, EventArgs e)
        {
            label16.Visible = false;
        }

        private void checkBox6_CheckedChanged(object sender, EventArgs e)
        {
            label17.Visible = false;
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (Int32.Parse(comboBox1.Text) >= 1  && Int32.Parse(comboBox1.Text) <= 4)
            {   
            }
            else
            {
                MessageBox.Show("Credit Hour Must be in Range 1-4");
                comboBox1.BackColor = Color.Tomato;
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            label18.Visible = false;
            pictureBox2.Visible = false;
            pictureBox3.Visible = false;
            button2.Visible = false;
        }

        private void timer1_Tick(object sender, EventArgs e)
        {

        }
    }
}
