using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ass_3_OOP_C_sharp
{
    public partial class Calculator : Form
    {
        short j = 0;
        public float x;
        int i = 0;
        double y = 0;
        float p= 1;
        double o;
        public char op;
        public Calculator()
        {
            InitializeComponent();
        }

        private void SUM_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
                x = Int32.Parse(textBox1.Text.ToString());
                y += x;
                textBox1.Text = "";
                label2.Text = y.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '+';
            }
          
        }

        private void Form1_Load(object sender, EventArgs e)
        {
           
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
                x = Int32.Parse(textBox1.Text.ToString());
                y = y-x;
                if (j == 0)
                {
                    y=-y;
                    j=2;                
                }
                textBox1.Text = "";
                label2.Text = y.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '-';
            }
            
        }

        private void button3_Click(object sender, EventArgs e)
        {
            
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
                x = Int32.Parse(textBox1.Text.ToString());
                p *= x;
                textBox1.Text = "";
                label2.Text = p.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '*';
                y = p;
            }
            
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
               float t = float.Parse(textBox1.Text.ToString());
                if (j==0) {
                    p = t;
                    j = 2;
                }
                else
                p /=t;
                textBox1.Text = "";
                label2.Text = p.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '/';
                y = p;
            }
            
        }

        private void button5_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
                float t = float.Parse(textBox1.Text.ToString());
                if (j == 0)
                {
                    p = t;
                    j = 2;
                }
                else
                    p %= t;
                textBox1.Text = "";
                label2.Text = p.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '%';
                y = p;
            }
                
            }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {

            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                i++;
                float t = float.Parse(textBox1.Text.ToString());
                if (j == 0)
                {
                    p = t;
                    j = 2;
                }
                else
                o = Math.Pow(p,t);
                textBox1.Text = "";
                label2.Text = o.ToString();
                if (i == 2)
                {
                    label2.Visible = true;
                }
                op = '^';
                y = o;
            }
            
        }

        private void Number1_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button15_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 0;
        }

        private void button13_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 8;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 1;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 2;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 3;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 4;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 5;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 6;
        }

        private void button12_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 7;
        }

        private void button14_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 9;
        }

        private void button17_Click(object sender, EventArgs e)
        {
            textBox1.Clear();
            y = 0;
            i = 0;
            p = 1;
            j = 0;
            label2.Visible = false;
                }

        private void button16_Click(object sender, EventArgs e)
        {
                int c = textBox1.TextLength;
                int flag = 0;
                string text = textBox1.Text;
                for (int i = 0; i < c; i++)
                {
                    if (text[i].ToString() == ".")
                    {
                        flag = 1; break;
                    }
                    else
                    {
                        flag = 0;
                    }
                }
            if (flag == 0)
            {
                textBox1.Text = textBox1.Text + ".";
            }
            }

        private void button18_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text.Remove(textBox1.Text.Length - 1);
        }

        private void button19_Click(object sender, EventArgs e)
        {
            label2.Text = (Math.Cos(double.Parse(textBox1.Text))).ToString();
            label2.Visible = true;
        }

        private void button20_Click(object sender, EventArgs e)
        {
            
            if (op == '+')
            {
                if (i==1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                y += x;
                textBox1.Text = "";
            }
           else  if (op == '-')
            {
                if (i == 1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                y -= x;
                textBox1.Text = "";
            }
            else if (op == '*')
            {
                if (i == 1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                y *= x;
                textBox1.Text = "";
            }
            else if (op == '/')
            {
                if (i == 1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                p /= x;
                y = p;
                textBox1.Text = "";
            }
            else if (op == '%')
            {
                if (i == 1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                p %= x;
                y = p;
                textBox1.Text = "";
            }
            else if (op == '^')
            {
                if (i == 1)
                {
                    x = float.Parse(textBox1.Text);
                    i = 2;
                }
                o = Math.Pow(p, x);
                y = o;
                textBox1.Text = "";
            }
            label2.Visible = true;
            label2.Text = y.ToString();

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button19_Click_1(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                label2.Text = Math.Cos(float.Parse(textBox1.Text)).ToString();
                label2.Visible = true;
            }
            }

        private void button21_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                label2.Text = Math.Sin(float.Parse(textBox1.Text)).ToString();
                label2.Visible = true;
            }
        }

        private void button22_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
            {
                label2.Text = "Please Enter Number";
                label2.Visible = true;
            }
            else
            {
                label2.Text = Math.Tan(float.Parse(textBox1.Text)).ToString();
                label2.Visible = true;
            }
        }

        private void button23_Click(object sender, EventArgs e)
        {
            
            
        }
    }
}