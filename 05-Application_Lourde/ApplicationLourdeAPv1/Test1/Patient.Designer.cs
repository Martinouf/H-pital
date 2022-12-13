namespace Test1
{
    partial class Patient
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.BtQuitter = new System.Windows.Forms.Button();
            this.Bt_Valider = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.TbNumCarteVitale = new System.Windows.Forms.TextBox();
            this.TbNom = new System.Windows.Forms.TextBox();
            this.TbPrenom = new System.Windows.Forms.TextBox();
            this.TbAdresse = new System.Windows.Forms.TextBox();
            this.TbDateNaiss = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Underline, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.Red;
            this.label1.Location = new System.Drawing.Point(294, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(200, 25);
            this.label1.TabIndex = 0;
            this.label1.Text = "Création d\'un dossier patient";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // BtQuitter
            // 
            this.BtQuitter.ForeColor = System.Drawing.Color.Red;
            this.BtQuitter.Location = new System.Drawing.Point(713, 415);
            this.BtQuitter.Name = "BtQuitter";
            this.BtQuitter.Size = new System.Drawing.Size(75, 23);
            this.BtQuitter.TabIndex = 2;
            this.BtQuitter.Text = "Quitter";
            this.BtQuitter.UseVisualStyleBackColor = true;
            this.BtQuitter.Click += new System.EventHandler(this.BtQuitter_Click);
            // 
            // Bt_Valider
            // 
            this.Bt_Valider.ForeColor = System.Drawing.Color.ForestGreen;
            this.Bt_Valider.Location = new System.Drawing.Point(619, 415);
            this.Bt_Valider.Name = "Bt_Valider";
            this.Bt_Valider.Size = new System.Drawing.Size(75, 23);
            this.Bt_Valider.TabIndex = 3;
            this.Bt_Valider.Text = "Valider";
            this.Bt_Valider.UseVisualStyleBackColor = true;
            this.Bt_Valider.Click += new System.EventHandler(this.Bt_Valider_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(12, 52);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(105, 13);
            this.label2.TabIndex = 4;
            this.label2.Text = "Numéro carte vitale :";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(12, 89);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(35, 13);
            this.label3.TabIndex = 5;
            this.label3.Text = "Nom :";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(12, 127);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(52, 13);
            this.label4.TabIndex = 6;
            this.label4.Text = "Prénom : ";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(12, 166);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(54, 13);
            this.label5.TabIndex = 7;
            this.label5.Text = "Adresse : ";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(12, 209);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(102, 13);
            this.label6.TabIndex = 8;
            this.label6.Text = "Date de naissance :";
            // 
            // TbNumCarteVitale
            // 
            this.TbNumCarteVitale.Location = new System.Drawing.Point(158, 45);
            this.TbNumCarteVitale.Name = "TbNumCarteVitale";
            this.TbNumCarteVitale.Size = new System.Drawing.Size(100, 20);
            this.TbNumCarteVitale.TabIndex = 9;
            // 
            // TbNom
            // 
            this.TbNom.Location = new System.Drawing.Point(158, 86);
            this.TbNom.Name = "TbNom";
            this.TbNom.Size = new System.Drawing.Size(100, 20);
            this.TbNom.TabIndex = 10;
            // 
            // TbPrenom
            // 
            this.TbPrenom.Location = new System.Drawing.Point(158, 124);
            this.TbPrenom.Name = "TbPrenom";
            this.TbPrenom.Size = new System.Drawing.Size(100, 20);
            this.TbPrenom.TabIndex = 11;
            // 
            // TbAdresse
            // 
            this.TbAdresse.Location = new System.Drawing.Point(158, 163);
            this.TbAdresse.Name = "TbAdresse";
            this.TbAdresse.Size = new System.Drawing.Size(100, 20);
            this.TbAdresse.TabIndex = 12;
            // 
            // TbDateNaiss
            // 
            this.TbDateNaiss.Location = new System.Drawing.Point(158, 206);
            this.TbDateNaiss.Name = "TbDateNaiss";
            this.TbDateNaiss.Size = new System.Drawing.Size(100, 20);
            this.TbDateNaiss.TabIndex = 13;
            // 
            // Patient
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.TbDateNaiss);
            this.Controls.Add(this.TbAdresse);
            this.Controls.Add(this.TbPrenom);
            this.Controls.Add(this.TbNom);
            this.Controls.Add(this.TbNumCarteVitale);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.Bt_Valider);
            this.Controls.Add(this.BtQuitter);
            this.Controls.Add(this.label1);
            this.Name = "Patient";
            this.Text = "Patient";
            this.Load += new System.EventHandler(this.Patient_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button BtQuitter;
        private System.Windows.Forms.Button Bt_Valider;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.TextBox TbNumCarteVitale;
        private System.Windows.Forms.TextBox TbNom;
        private System.Windows.Forms.TextBox TbPrenom;
        private System.Windows.Forms.TextBox TbAdresse;
        private System.Windows.Forms.TextBox TbDateNaiss;
    }
}

