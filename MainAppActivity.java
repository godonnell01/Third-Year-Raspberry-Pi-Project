package project.cit.ie.hmsapp;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.FileOutputStream;
import java.util.ArrayList;

/**
 * Created by Sean on 20/02/2016.
 * The MainAppActivity class that handles work that may need to
 * be done from on the main app, for example after a button has been pressed.
 */
public class MainAppActivity extends AppCompatActivity {

    private TextView addressText, helloText;
    private Controller controller;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_app);
        addressText = (TextView)findViewById(R.id.address_field);
        helloText = (TextView)findViewById(R.id.helloField);

        //Retrieves data sent from the login page and changes the text accordingly
        Intent intent = getIntent();
        addressText.setText(getString(R.string.address_field) + " " + intent.getStringExtra("address"));
        helloText.setText(getString(R.string.hello_name) + " " + intent.getStringExtra("name"));
        controller = new Controller();
    }

    //Creates an alertdialog with the option the test each of the alarms
    public void testAlarmsClick(View view) {

        //Builds an an alert dialog
        final AlertDialog alertDialog = new AlertDialog.Builder(this).create();
        alertDialog.setIcon(android.R.drawable.ic_dialog_alert);
        alertDialog.setTitle(getString(R.string.test_alarms));
        alertDialog.setMessage(getString(R.string.which_alarm));

        //Each setButton method sets text and functionality of the specified button
        alertDialog.setButton(AlertDialog.BUTTON_POSITIVE, getString(R.string.house_Alarm), new DialogInterface.OnClickListener() { //Yes button to close app

            public void onClick(DialogInterface dialog, int id) {
                controller.testAlarm();
                return;
            }
        });

        alertDialog.setButton(AlertDialog.BUTTON_NEGATIVE, getString(R.string.fire_Alarm), new DialogInterface.OnClickListener() {//No button to cancel back press

            public void onClick(DialogInterface dialog, int id) {
                controller.testAlarm();
                return;
            }
        });

        alertDialog.setButton(AlertDialog.BUTTON_NEUTRAL, getString(R.string.carbon_Alarm), new DialogInterface.OnClickListener() {//Settings button to open settings activity

            public void onClick(DialogInterface dialog, int id) {
                controller.testAlarm();
                return;
            }
        });

        //Displays the alertDialog on the ui
        alertDialog.show();
    }

    //Creates an alertDialog with the options to turn on and off the LED's
    public void lightsClick(View view) {

        //Builds an an alert dialog
        final AlertDialog alertDialog = new AlertDialog.Builder(this).create();
        alertDialog.setIcon(android.R.drawable.ic_dialog_alert);
        alertDialog.setTitle(getString(R.string.lights));
        alertDialog.setMessage(getString(R.string.which_light));

        //Each setButton method sets text and functionality of the specified button
        alertDialog.setButton(AlertDialog.BUTTON_POSITIVE, getString(R.string.kitchen_light), new DialogInterface.OnClickListener() { //Yes button to close app

            public void onClick(DialogInterface dialog, int id) {
                controller.kitchenLight();
            }
        });

        alertDialog.setButton(AlertDialog.BUTTON_NEGATIVE, getString(R.string.hall_light), new DialogInterface.OnClickListener() {//No button to cancel back press

            public void onClick(DialogInterface dialog, int id) {
                controller.hallwayLight();
            }
        });

        alertDialog.setButton(AlertDialog.BUTTON_NEUTRAL, getString(R.string.exit), new DialogInterface.OnClickListener() {//Settings button to open settings activity

            public void onClick(DialogInterface dialog, int id) {
                return;
            }
        });

        //Displays the alertDialog on the ui
        alertDialog.show();
    }

    //Creates and starts an intent to launch the contact page
    public void contactButtonClick(View view) {
        Intent sigin = new Intent(MainAppActivity.this, ContactPage.class);
        startActivity(sigin);
    }

    //Creates and starts an intent to launch the login page
    public void logout(View view) {

        Intent sigin = new Intent(MainAppActivity.this, LoginActivity.class);
        startActivity(sigin);

        //Ends the main activity so as that it cannot be rechaed again without logging back in
        finish();
    }

    //Calls armAlarm method in the controller class
    public void armClick(View view){
        controller.armAlarm();
    }

    //Calls disarmAlarm method in the controller class
    public void disarmClick(View view){
        controller.disarmAlarm();
    }

}
