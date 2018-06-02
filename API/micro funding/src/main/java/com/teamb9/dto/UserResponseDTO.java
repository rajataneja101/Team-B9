package com.teamb9.dto;

public class UserResponseDTO {

	private String userType;
	private String emailId;
	private String fname;
	private String lname;
	private int fundingDone;
    private Long id;
	public String getUserType() {
		return userType;
	}
	public void setUserType(String userType) {
		this.userType = userType;
	}
	public String getEmailId() {
		return emailId;
	}
	public void setEmailId(String emailId) {
		this.emailId = emailId;
	}
	public String getFname() {
		return fname;
	}
	public void setFname(String fname) {
		this.fname = fname;
	}
	public String getLname() {
		return lname;
	}
	public void setLname(String lname) {
		this.lname = lname;
	}
	public int getFundingDone() {
		return fundingDone;
	}
	public void setFundingDone(int fundingDone) {
		this.fundingDone = fundingDone;
	}
	public Long getId() {
		return id;
	}
	public void setId(Long id) {
		this.id = id;
	}
	
	
	
	
}
