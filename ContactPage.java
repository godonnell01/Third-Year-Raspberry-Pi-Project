package project.cit.ie.hmsapp;

import android.app.PendingIntent;
import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

/**
 * Created by Sean on 06/04/2016.
 * The MainAppActivity class that handles work that may need to
 * be done from on the contact us page.
 */
public class ContactPage extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_contact_page);
    }

    //Opens the dial pad in the phone using an ACTION_DIAL intent, with the number given already typed in
    public void callClick(View view){
        Intent makeCall = new Intent(Intent.ACTION_DIAL, Uri.parse("tel:0892190769"));
        startActivity(makeCall);
    }

    public void emailClick(View view){
        // Create the Intent
        Intent emailIntent = new Intent(android.content.Intent.ACTION_SEND);

        // Fill it with Data
        emailIntent.setType("text/plain");
        emailIntent.putExtra(android.content.Intent.EXTRA_EMAIL, "sean.p.collins@mycit.ie");

        // Send it off to the Activity-Chooser
        startActivity(Intent.createChooser(emailIntent, "Send mail..."));
    }

    //Closes activity and by default returns to main activtiy
    public void backClick(View view){
        finish();
    }
}
